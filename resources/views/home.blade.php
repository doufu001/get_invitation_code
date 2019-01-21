<!doctype html>
<html lang="zh-cn">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>获取邀请码</title>
</head>
<body>
<form action="{{route('store')}}" method="post">
    @csrf
    <div class="container">
        <div class="card">
            <div class="card-header">
                获取邀请码
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="form-group">
                        <label for="qq">QQ</label>
                        <input type="text" class="form-control" name="qq" id="qq" value="{{old('QQ')}}"
                               placeholder="输入QQ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱</label>
                        <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp"
                               value="{{old('email')}}"
                               placeholder="输入邮箱">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">手机号</label>
                        <input type="text" class="form-control" name="tel" id="tel" value="{{old('tel')}}"
                               placeholder="输入手机号">
                    </div>
                    @if(!empty($errors))
                        <div class="alert alert-warning" role="alert">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>

            </div>
            @if(!empty(session('success')))
                <p>获取成功</p>
                <p>您的邀请码为：{{session('success')}}</p>
            @endif
        </div>
    </div>

</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>
</html>