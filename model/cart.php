<?php
function viewcart($del)
{
     global $img_path;
     $tong = 0;
     $i = 0;
     if ($del == 1) {
          $xoasp_th =    '<th>Thao Tác</th>';
          $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
     } else {
          $xoasp_th = '';
          $xoasp_td = '';
     }
     echo '<tr>
               <th>Hình</th>
               <th>Sản Phẩm</th>
               <th>Đơn giá</th>
               <th>Số lượng</th>
               <th>Thành Tiền</th>
               ' . $xoasp_th . '
           
          </tr>';
     foreach ($_SESSION['mycart'] as $cart) {
          $hinh = $img_path . $cart[2];
          $ttien  = $cart[3] * $cart[4];
          $tong += $ttien;

          echo '
    
          <tr>
               <td><img src="' . $hinh . '" alt="" height="80px" ></td>
               <td>' . $cart[1] . '</td>
               <td>' . number_format($cart[3]) . '</td>
               <td>' . $cart[4] . '</td>
               <td>' . number_format($ttien) . '</td>
               ' . $xoasp_td . '
          </tr>';
          $i += 1;
     }
     echo ' <tr>
     <td colspan="4">Tổng đơn hàng</td>
     <td>' . number_format($tong) . '</td>
     <td></td>
     </tr>';
}
