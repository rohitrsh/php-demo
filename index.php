<?php

echo '
<html>
<head>
<style>
body {background-color: white;text-align: center;}
table, th, td {
    border: 1px solid #cccccc;
    border-collapse: collapse;
}

</style>
</head>';

echo '
<div style="text-align:center;">
<h1 style="color: #5e9ca0;">Demonstration Application</h1>
<h3>Technology &nbsp;: &nbsp;Kubernetes, Dockers, AWS EC2 Instance, JenKins</h3>
<h3>Application &nbsp; : &nbsp; Nginx, CentOS, Php</h3>
<p>&nbsp;</p>
<h1><strong><span style="color: #0000ff;">Version : 1.0</span></strong></h1>
<table style="margin-left:25%;width:50%">
<tbody>
<tr>
<td><b>Container Id</b></td>
<td>&nbsp;'.exec('cat /etc/hostname').'</td>
</tr>
<tr>
<td><b>HTTP_HOST</b></td>
<td>&nbsp;'.$_SERVER['HTTP_HOST'].'</td>
</tr>
<tr>
<td><b>SERVER_PORT</b></td>
<td>&nbsp;'.$_SERVER['SERVER_PORT'].'</td>
</tr>
<tr>
<td><b>SERVER_PROTOCOL</b></td>
<td>&nbsp;'.$_SERVER['SERVER_PROTOCOL'].'</td>
</tr>
<tr>
<td><b>HTTP_USER_AGENT</b></td>
<td>&nbsp;'.$_SERVER['HTTP_USER_AGENT'].'</td>
</tr>
<tr>
<td><b>REMOTE_ADDR</b></td>
<td>&nbsp;'.$_SERVER['REMOTE_ADDR'].'</td>
</tr>
<tr>
<td><b>REMOTE_PORT</b></td>
<td>&nbsp;'.$_SERVER['REMOTE_PORT'].'</td>
</tr>

</tbody>
</table>
<p>&nbsp;</p></div>';
echo "</BODY></HTML>";
?>
