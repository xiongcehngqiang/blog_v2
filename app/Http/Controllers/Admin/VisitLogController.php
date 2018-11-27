<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisitLog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.visit.index');
    }

    public function data(Request $request)
    {
        $res = VisitLog::query()
            ->orderBy('id','desc')
            ->orderBy('sort','desc')
            ->paginate($request->get('limit',30))
            ->toArray();

        $data = [
            'code' => 0,
            'msg'   => '正在请求中...',
            'count' => $res['total'],
            'data'  => $res['data']
        ];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ip'  => 'required|numeric'
        ]);
        if (VisitLog::create($request->all())){
            return redirect(route('admin.visit'))->with(['status'=>'添加完成']);
        }

        return redirect(route('admin.visit'))->with(['status'=>'系统错误']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ids = $request->get('ids');
        if (empty($ids)){
            return response()->json(['code'=>1,'msg'=>'请选择删除项']);
        }
        if (VisitLog::destroy($ids)){
            return response()->json(['code'=>0,'msg'=>'删除成功']);
        }

        return response()->json(['code'=>1,'msg'=>'删除失败']);
    }
}
