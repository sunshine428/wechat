<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>素材添加</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div style="padding-left: 50px;padding-top: 50px">
    <form action="{{url('wechat/add_do')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3><b>素材管理-素材上传</b></h3>
        <div class="form-group">
            <label for="exampleInputEmail1">素材名称</label>
            <input type="text" class="form-control" name="media_name" placeholder="素材名称">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">素材文件</label>
            <input type="file" name="file" id="exampleInputFile">
        </div>

        <div class="form-group">
            <label for="disabledSelect">素菜类型</label>
            <select id="disabledSelect" class="form-control" name="media_type">
                <option value="1">临时素材</option>
                <option value="2">永久素材</option>
            </select>
        </div>


        <div class="form-group">
            <label for="disabledSelect">素菜格式</label>
            <select id="disabledSelect" class="form-control" name="media_format">
                <option value="image">图片</option>
                <option value="voice">音频</option>
                <option value="video">视频</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">上传</button>
    </form>
</div>
</body>
</html>