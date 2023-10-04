@extends('template.app')
@section('script')
    <script language="javascript">
        $(document).ready(function(){
            $("#display").val("{{ $display }}");
            $("#searchtype").val("{{ $searchtype }}");
            $("#searchname").val("{{ $searchname }}");
        });
    </script>
@endsection
@section('breadcrumbs')
<div class="col-md-5 align-self-center">
    <h3 class="text-themecolor">제품정보관리</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">기초정보관리</li>
        <li class="breadcrumb-item active">제품정보관리</li>
    </ol>
</div>
<div class="col-md-7 align-self-center text-right d-none d-md-block">
    <button type="button" class="btn btn-info" onclick="location.href='/basic/product/create'">
        <i class="fa fa-plus-circle"> 제품정보등록</i>
    </button>
</div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive card-body">
                <!-- ================= -->
                <!-- 검색바 시작 -->
                <!-- ================= -->
                <div class="col-lg-12">
                    <form method="get" action="/basic/product" style="display: inline;">
                        <div class="form-inline form-group form-row">
                            <div class="col-1 input-group">
                                <!-- 검색분류 셀렉트 시작 -->
                                <select name="searchtype" id="searchtype" class="custom-select">
                                    <option value="name">제품명 </option>
                                    <option value="lot_num">제품lot번호</option>
                                    <option value="groupname">품목군</option>
                                </select>
                                <!-- 검색분류 셀렉트 끝 -->
                            </div>
                            <div class="col-3 input-group">
                            <input type="text" name="searchname" class="form-control search-query" value="{{ $searchname }}"
                                    id="search_txt">
                            </div>
                            <div class="col-3 input-group">
                                <input type="submit" class="btn btn-info" value="검색" style="margin-right:10px;" />
                                <input type="button" class="btn btn-success" id="btn_refresh" value="초기화" onclick="location.href='/basic/product'" />
                            </div>
                            <div class="col-3 input-group">
                            </div>
                            <!-- 페이지 표시수 시작 -->
                            <div class="col-2 input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="dataDisplaySelect">표시</label>
                                </div>
                                <select name="display" class="custom-select" id="dataDisplaySelect">
                                   @for($i = 5; $i <= 20; $i+=5)
                                        <option value="{{ $i }}">{{ $i }}개</option>
                                   @endfor 
                                </select>
                            </div>
                            <!-- 페이지 표시수 끝 -->
                        </div>
                    </form>
                </div>
                <!-- ================= -->
                <!-- 검색바 끝 -->
                <!-- ================= -->
            </div>
            <div class="table-responsive">
                <div class="card-body">
                <table id="tb" class="table table-bordered">
                    <thead class="dddcolor thin-border-bottom">
                        <tr>
                            <th class="col-xs-1">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                제품lot번호
                            </th>
                            <th class="col-xs-3">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                제품명
                            </th>
                            <th class="col-xs-2">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                구분
                            </th>
                            <th class="col-xs-1">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                단가
                            </th>
                            <th class="col-xs-1">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                비고
                            </th>
                            <th class="col-xs-1">
                                <i class="ace-icon fa fa-caret-right blue"></i>
                                관리
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>
                                {{ $product->lot_num }}
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->category }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td>
                                {{ $product->remark }}
                            </td>
                            <td>
                                수정 / 삭제
                            </td>
                            @empty
                        <tr>
                            <td>
                                <div class="">입력된 데이터가 없습니다.</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
                <div class="card-body">
                {{ $products->appends(['searchname' => $searchname,
                                        'searchtype' => $searchtype,
                                        'display' => $display])
                            ->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection