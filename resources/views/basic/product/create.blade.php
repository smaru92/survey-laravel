@extends('template.app')
@section('script')
    <script language="javascript">
    </script>
@endsection
@section('breadcrumbs')
<div class="col-md-5 align-self-center">
    <h3 class="text-themecolor">제품정보관리</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">기초정보관리</li>
        <li class="breadcrumb-item">제품정보관리</li>
        <li class="breadcrumb-item active">제품정보등록</li>
    </ol>
</div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form name="form1" id="frm" action="/basic/product" method="post" enctype="multipart/form-data">                    
                @csrf

                    <div class="col-md-12 center">
                        <table class="table table-bordered card-body">
                            <tbody>
                                <tr>
                                    <th class="" style="background-color:#f1f1f1; vertical-align:middle; ">
                                            <i class="ace-icon fa fa-caret-right blue"></i> 제품lot번호
                                    </th>
                                    <td>
                                        <input type="text" class="form-control" name="lot_num" id="product_lot_num" err="제품lot번호를 입력하세요" required="required">
                                    </td>
                                </tr> 
                                <tr>
                                    <th class="" style="background-color:#f1f1f1; vertical-align:middle;">
                                        <i class="ace-icon fa fa-caret-right"></i>
                                        구분
                                    </th>
                                    <td>
                                        <select class="custom-select mr-sm-1" name="category" id="product_category" style="width:150px">
                                            <option value="1">완제품</option>
                                            <option value="2">반제품</option>
                                            <option value="3">원자재</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" style="background-color:#f1f1f1; vertical-align:middle; ">
                                        <i class="ace-icon fa fa-caret-right blue"></i> 제품명
                                    </th>	
                                    <td>
                                        <input type="text" name="name" class="form-control" id="product_name" err="제품명을 입력하세요" required="required">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" style="background-color:#f1f1f1; vertical-align:middle; ">
                                        <i class="ace-icon fa fa-caret-right blue"></i> 단가
                                    </th>
                                    <td>
                                        <input type="text" class="form-control onlyNumber" name="price" id="product_price" validation="yes" required="required" maxlength="11">
                                    </td>
                                </tr>
                                <tr>
                                    <th class="" style="background-color:#f1f1f1; vertical-align:middle; ">													
                                        <i class="ace-icon fa fa-caret-right blue"></i>비고
                                    </th>
                                    <td>
                                        <textarea class="form-control autosize" name="remark" aria-label="With textarea" onkeydown="resize(this)" onkeyup="resize(this)"></textarea>
                                    </td>												
                                </tr>
                                
                                    
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 center">
                        <button class="btn btn-info regist" type="submit" id="btn_submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            <span id="btnSubmitTxt">제품등록</span>
                        </button>
                        <button class="btn btn-light" type="button" style="border:1px solid #a9a9a9;" onclick="javascript:history.back();">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            취소
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection