<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <style>
            .data_line{
                
            }
            .desc {
                display: inline-block;
                width: 70px;
                text-align: right;
            }
        </style>
	function setHidden(){
		var index = document.getElementsByName('team')[0].selectedIndex;
		var options = document.getElementsByTagName('option');
		console.log(options[index]);

	}
	<script>
	</script>
    </head>
    <body>
        <form action="/yhcms/index.php/Home/Houses/add" method="post">
            <div class="data_line">
                <span class="desc">户号</span>
                <input type="text" name="house_id" value="" />
            </div>
            <div class="data_line">
                <span class="desc">所属区队</span>
                <select name="team"> 
                    <option value="1">云汉一队</option>
                    <option value="2">云汉二队</option>
                    <option value="东3">云汉东三队</option>
                    <option value="西3">云汉西三队</option>
                    <option value="4">云汉四队</option>
                    <option value="5">云汉五队</option>
                    <option value="6">云汉六队</option>
                    <option value="7">云汉七队</option>
                    <option value="8">云汉八队</option>
                    <option value="9">云汉九队</option>
                    <option value="10">云汉十队</option>
                    <option value="11">云汉十一队</option>
                    <option value="12">云汉十二队</option>
                    <option value="13">云汉十三队</option>
                    <option value="14">非云汉户籍</option>
                </select>
		<input type="hidden" name="team_c" />
            </div>
            <div class="data_line">
                <span class="desc">户口册号</span>
                <input type="text" name="team_id" value="" />
            </div>
            <div class="data_line">
                <span class="desc">电话</span>
                <input type="text" name="phone" value="" />
            </div>
            <div class="data_line">
                <span class="desc">地址</span>
                <input type="text" name="address" value="" />
            </div>
	    <input type="button" onclick="setHidden()" value="setHidden" />
            <button type="submit">提交</button>
        </form>
    </body>
</html>