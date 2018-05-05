<html>
	<head>
	</head>
	<body>
		<div style="height:20px">
		</div>
		<table style="margin:0 auto" cellpadding="0" cellspacing="0" border="1">
			<tr>
				
				<th style="width:30px;text-align:center">id</th>
				<th style="width:60px;text-align:center">姓名</th>
				<th style="width:40px;text-align:center">性别</th>
				<th style="width:100px;text-align:center">身份证号</th>
				<th style="width:50px;text-align:center">宿舍</th>
				<th style="width:50px;text-align:center">班级</th>
				<th style="width:50px;text-align:center">民族</th>
				<th style="width:100px;text-align:center">专业</th>
				<th style="width:100px;text-align:center">生日</th>
				<th style="width:100px;text-align:center">头像</th>
				<th style="width:80px;text-align:center">操作</th>
			</tr>
			<?php
			foreach($ulist as $v):
			?>
			<tr style="text-align:center">
				
				<td><?=$v[1];?></td>
				<td><?=$v[3];?></td>
				<td><?=$v[5];?></td>
				<td><?=$v[7];?></td>
				<td><?=$v[9];?></td>
				<td><?=$v[11];?></td>
				<td><?=$v[13];?></td>
				<td><?=$v[15];?></td>
				<td><?=$v[17];?></td>
				<td>
					<a href="<?=$v[19];?>">
						<img src="<?=$v[19];?>" style="margin:5px;width:50px;height:50px">
					</a>
				</td>
				<td>
					<a href="dellist?id=<?=$v[1];?>">删除</a>
					<a href="uplist?id=<?=$v[1];?>">编辑</a>
				</td>
			</tr>
			<?php endforeach;?>
		</table>
		<div style="width:400px;margin:0 auto;padding-top:20px">
			<ul style="list-style:none">
				<li style="width:100px;text-align:center;float:left">
					<?php
						if($page==1){
					?>
							<a>上一页</a>
					<?php
						}else{
					?>
							<a href="list?page=<?=$page-1?>">上一页</a>
					<?php
						}
					?>
				</li>
				
				<li style="width:100px;text-align:center;float:left">
					当前第<a><?php echo $page; ?></a>页
				</li>
					
				<li style="width:100px;text-align:center;float:left">
					<?php
						if($page<$pages){
					?>
							<a href="list?page=<?=$page+1?>">下一页</a>
					<?php
						}else{
					?>
							<a>下一页</a>
					<?php				
						}
					?>
				</li>
				<li style="width:50px;text-align:center;float:left">
					<?php echo $pages;?>
				</li>
				
			</ul>
		</div>
		<div style="width:200px;margin:0 auto;padding-top:20px">
			<a style="display:block;width:100px;text-align:center;float:left" href="add">添加</a>
		</div>
	</body>
</html>
