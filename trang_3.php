<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cua hang Hoa Dep</title>
<style type="text/css">
<!--
.style2 {
	color: #000099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style3 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 18px;
	color: #009933;
}
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style17 {font-size: smaller}
.style19 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
	color: #009933;
	font-weight: bold;
}
a:link {
	color: #006633;
}
a:visited {
	color: #006633;
}
a:hover {
	color: #009900;
}
a:active {
	color: #009900;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="199" height="111" /></td>
    <td width="28%" valign="top"><div align="center">
      <table width="300" border="0" cellpadding="0" cellspacing="2" bgcolor="#F4FBEB">
        <tr>
          <td><span class="style19">(08) 9891234 </span></td>
        </tr>
        <tr>
          <td><span class="style10">(Giờ mở cửa: 8:00 - 22:00 mỗi ngày) </span></td>
          </tr>
        <tr>
          <td><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn </a></span></td>
          </tr>
        <tr>
          <td><span class="style10"><img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
          </tr>
      </table>
    </div></td>
    <td colspan="3" valign="top"><div align="right"><img src="hinh_anh/top.jpg" width="450" height="113"></div></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#C7EAB0"><span class="style3">&nbsp;Danh mục</span>
          <table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td class="style10">&nbsp;<a href="trang_1.php">Trang ch&#7911;</a></td>
            </tr>
            <tr>
              <td class="style10">&nbsp;<a href="trang_2.php">T&igrave;m ki&#7871;m b&oacute; hoa </a></td>
            </tr>
            <tr>
              <td class="style10">&nbsp;<a href="trang_3.php">Th&ecirc;m m&#7899;i b&oacute; hoa </a></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB">&nbsp;</td>
      </tr>
    </table>    
    <img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" /></td>
    <td colspan="3" valign="top"><p>&nbsp;</p>
      <form action="trang_3.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="70%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#E6F6D9">
          <tr bgcolor="#D7F2C5">
            <td colspan="2"><div align="center" class="style4"> THÊM BÓ HOA MỚI </div></td>
          </tr>
          <tr>
            <td width="26%"><p class="style10">&nbsp;Tên bó hoa: </p></td>
            <td width="74%"><label>
              <input name="ten_hoa" type="text" id="ten_hoa" size="35">
            </label></td>
          </tr>
          <tr>
            <td><p class="style10">&nbsp;Loại hoa:</p></td>
            <td><label>
              <select name="loai" id="loai">
			  <?php	
			  // hien thi loai
			  		$file = fopen("du_lieu\loai.txt","r",1);
						while(!feof($file))
						{
						$noi_dung = $noi_dung. fgets($file);
						}		
						fclose($file);

						$mang_loai = explode("/*",$noi_dung);
						$n = count($mang_loai);							
						for($i=1;$i<$n;$i++)
						{
							$mang = explode("|",$mang_loai[$i]);
							echo  "<option value='$mang[0]'>$mang[1]</option>";
						}//for						
			?>
              </select>
            </label></td>
          </tr>
          <tr>
            <td><p class="style10">&nbsp;Thành phần: </p></td>
            <td><label>
              <textarea name="mo_ta" cols="35" id="mo_ta"></textarea>
            </label></td>
          </tr>
          <tr>
            <td><p class="style10">&nbsp;Đơn giá </p></td>
            <td><label>
              <input name="gia_ban" type="text" id="gia_ban">
            </label></td>
          </tr>
          <tr>
            <td><p class="style10">&nbsp;Hình bó hoa </p></td>
            <td><label>
              <input name="file" type="file" size="45">
            </label></td>
          </tr>
          <tr>
            <td height="35" colspan="2"><p align="center">
              <label>
              <input type="submit" name="Submit" value="Thêm bó hoa mới">
              </label>
            </p></td>
          </tr>
        </table>
      </form>
     
(viết code thêm bó hoa mới)	</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#DEF4CE"><span class="style2">Copyright &copy;2003-2007 <br />
    Công ty thiết kế Ý Tưởng </span></td>
    <td valign="top" bgcolor="#DEF4CE"><span class="style17"></span></td>
    <td width="27%" valign="top" bgcolor="#DEF4CE"><span class="style17"></span></td>
    <td bgcolor="#DEF4CE"><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
	    <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
  </tr>
</table>
</body>
</html>
