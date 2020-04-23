<?php
$flowers = file('du_lieu/hoa.txt');
$status = false;
if (isset($_POST['ten'])) $name = $_POST['ten'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Cua hang Hoa Dep</title>
  <style type="text/css">
    <!--
    .style1 {
      color: #FF66FF
    }

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
      font-size: larger;
      font-weight: bold;
      color: #009933;
      font-family: Verdana, Arial, Helvetica, sans-serif;
    }

    .style5 {
      color: #006633;
      font-weight: bold;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: 16px;
    }

    .style10 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
    }

    .style12 {
      font-family: Verdana, Arial, Helvetica, sans-serif;
      font-size: smaller;
      color: #009933;
      font-weight: bold;
    }

    .style17 {
      font-size: smaller
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
      <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="200" height="101" align="top" /></td>
      <td width="28%" valign="top">
        <table width="117%" border="0" cellpadding="0" cellspacing="2">
          <tr>
            <td><span class="style12">(08) 9891234 </span></td>
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
      </td>
      <td colspan="3" valign="top">
        <form name="form1" method="post" action="trang_2.php">
          <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#BBE09D">
            <tr bgcolor="#F4F8E9">
              <td colspan="2" align="center" class="style1"><span class="style4"> T&igrave;m ki&#7871;m b&oacute; hoa </span></td>
            </tr>
            <tr>
              <td width="36%" bordercolor="#FFFFFF" bgcolor="#E8F6DC">
                <blockquote class="style10">
                  <p>T&ecirc;n b&oacute; hoa: </p>
                </blockquote>
              </td>
              <td width="64%" bordercolor="#FFFFFF" bgcolor="#E8F6DC"><input name="ten" type="text" id="ten" size="30" value="<?php if(isset($_POST['ten'])) echo $name ?>"></td>
            </tr>
            <tr>
              <td height="40" colspan="2" align="center" bgcolor="#E0F1CD">
                <input name="Submit" type="submit" value="Tìm kiếm"> </td>
            </tr>
          </table>
        </form>
      </td>
    </tr>
    <tr bgcolor="#F4FBEB">
      <td valign="top">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td>
              <table width="100%" border="0">
                <tr bgcolor="#F4FBEB">
                  <td bgcolor="#C7EAB0">&nbsp;<span class="style3">Danh mục</span></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="index.php" class="style10">Trang ch&#7911;</a></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="trang_2.php" class="style10">T&igrave;m ki&#7871;m b&oacute; hoa </a></td>
                </tr>
                <tr bgcolor="#F4FBEB">
                  <td>&nbsp;<a href="trang_3.php" class="style10">Th&ecirc;m m&#7899;i b&oacute; hoa </a></td>
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
      <td colspan="3" valign="top">
        <div style="display: grid; grid-template-columns: auto auto">
          <?php
          if (isset($_POST['ten']) && $name != "") {
            $length = count($flowers);
            for ($i = 0; $i < $length; $i++) {
              $pos = strpos(strtolower(explode("|", $flowers[$i])[2]), strtolower($name));
              if ($pos !== false) {
                echo
                  "<div style='display: flex'>
                  <div><img src='hinh_anh/" . explode("|", $flowers[$i])[4] . "' alt='" . explode("|", $flowers[$i])[2] . "'></div>
                  <div style='padding-left: 10px;'>
                    <p><i>Tên bó hoa: </i><b>" . explode("|", $flowers[$i])[2] . "</b></p>
                    <p><i>Giá bán: </i>" . number_format(explode("|", $flowers[$i])[3], 0, "", ",") . " VNĐ</p>
                    <p><i>Thành phần chính: </i><b>" . explode("|", $flowers[$i])[5] . "</b></p>
                  </div>
                </div>";
                $status = true;
              }
              if ($i == $length - 1 && $status == false) echo "Không tìm thấy bó hoa này";
            }
          }
          ?>
        </div>
      </td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#c7eab0"><span class="style2">Copyright &copy;2003-2007 <br />
          Công ty thiết kế Ý Tưởng </span></td>
      <td valign="top" bgcolor="#c7eab0"><span class="style17"></span></td>
      <td width="27%" valign="top" bgcolor="#c7eab0"><span class="style17"></span></td>
      <td bgcolor="#c7eab0"><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
          <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
          <br />
          <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
    </tr>
  </table>
</body>

</html>