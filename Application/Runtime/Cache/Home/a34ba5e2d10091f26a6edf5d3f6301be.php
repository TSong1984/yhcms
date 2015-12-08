<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <style>
            table, tr, td{
                border: 1px solid red;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>序号</td>
                <td>户号</td>
                <td>户口册号</td>
                <td>所属区队</td>
                <td>电话</td>
                <td>地址</td>
            </tr>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($i); ?></td>
                    <td><?php echo ($vo["house_id"]); ?></td>
                    <td><?php echo ($vo["team"]); ?>-<?php echo ($vo["team_id"]); ?></td>
                    <td><?php echo ($vo["team_c"]); ?>队</td>
                    <td><?php echo ($vo["phone"]); ?></td>
                    <td><?php echo ($vo["address"]); ?></td>
	    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </body>
</html>