<?php
$id = $_GET['id'];
$flowers = file('du_lieu/hoa.txt');
?>
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

    .style9 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }

    .style15 {
      font-size: smaller
    }

    .style17 {
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
    <tr bgcolor="#f4fbeb">
      <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="200" height="113" align="top" /></td>
      <td width="28%" valign="top">
        <table width="118%" border="0" cellpadding="0" cellspacing="2">
          <tr>
            <td><span class="style17">(08) 9891234 </span></td>
          </tr>
          <tr>
            <td><span class="style9">(Giờ mở cửa: 8:00 - 22:00 mỗi ngày) </span></td>
          </tr>
          <tr>
            <td><span class="style9"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn </a></span></td>
          </tr>
          <tr>
            <td><span class="style9"><img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
          </tr>
        </table>
      </td>
      <td colspan="3" valign="top" align="right">
        <img src="hinh_anh/top.jpg" width="434" height="113"></td>
    </tr>
    <tr bgcolor="#F4FBEB">
      <td valign="top">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <table width="100%" border="0">
                <tr bgcolor="#F4FBEB">
                  <td bgcolor="#C7EAB0"><span class="style3">&nbsp;Danh mục</span></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="index.php" class="style9">Trang ch&#7911;</a></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="trang_2.php" class="style9">T&igrave;m ki&#7871;m b&oacute; hoa </a></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="trang_3.php" class="style9">Th&ecirc;m m&#7899;i b&oacute; hoa </a></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td valign="bottom" bgcolor="#F4FBEB">&nbsp;</td>
          </tr>
        </table>
        <img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" />
      </td>
      <td colspan="3" valign="middle" align="center">
        <?php
        foreach ($flowers as $flower) {
          if (strstr(explode("|", $flower)[0], "*") == $id) echo
            "<div style='display: flex; justify-content: center; width: 70%; padding:5px; border: 3px #fefefe solid; box-shadow: inset 0 0 2px 0px #000'>
              <div><img src='/BT2-PHP/hinh_anh/" . explode("|", $flower)[4] . "' alt='" . explode("|", $flower)[2] . "' /></div>
              <div align='left' style='padding-left: 10px'>
                <h2>" . explode("|", $flower)[2] . "</h2>
                <p><i>Giá bán: </i>" . number_format(explode("|", $flower)[3], 0, "", ",") . " VNĐ</p>
                <p>
                  <i>Thành phần chính:</i>
                  <br>
                  " . explode("|", $flower)[5] . "</p>
                <p><a href='index.php'>Quay về trang chính</a></p>
              </div>
            </div>";
        }
        ?>
      </td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#c7eab0"><span class="style2">Copyright &copy;2003-2007 <br />
          Công ty thiết kế Ý Tưởng </span></td>
      <td valign="top" bgcolor="#c7eab0"><span class="style15"></span></td>
      <td width="27%" valign="top" bgcolor="#c7eab0"><span class="style15"></span></td>
      <td bgcolor="#c7eab0"><span class="style9"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
          <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
          <br />
          <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
    </tr>
  </table>
</body>

</html>