<?php
header("Content-Security-Policy: frame-ancestors 'none'");
session_start();
// session_regenerate_id(true);

require_once("function.php");
require 'PHPMailer-master/PHPMailerAutoload.php';
require('fpdf.php');

$font=realpath('assets/fonts/Calibri Italic.ttf');


$font1=realpath('assets/fonts/Calibri Regular.ttf');
$image=imagecreatefrompng("certificate.png");
$color=imagecolorallocate($image,19,21,22);
$name=$_SESSION['nameus'];
// imagettftext($image,40,0,370,305,$color,$font,$name);
$font_size =40;
$angle = 45;
$image_width = imagesx($image);  
$image_height = imagesy($image);
$text_box = imagettfbbox($font_size,$angle,$font,$name);
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[7]-$text_box[1];
$x = ($image_width/2) - ($text_width/2);
$y = ($image_height/2) - ($text_height/2);
imagettftext($image, $font_size, 0, $x-40, $y-70, $color, $font, $name);
$date= $_SESSION['toolname'];
imagettftext($image,30,0,$x+20, $y+30,$color,$font1,$date);
$file=$_SESSION['nameus'].'_'.$_SESSION['rndname'];
$file_path="certificate/".$file.".jpg";
$file_path1="certificate/".$file.".png";
$file_path_pdf="certificate/".$file.".pdf";
// $file_path_pdf="certificate/1638266961.pdf";
imagejpeg($image,$file_path);
imagepng($image,$file_path1);
imagedestroy($image);

	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,210,150);
	$pdf->Output($file_path_pdf,"F");
  echo $file_path_pdf;
  // exit();
 
$email =$_SESSION['emailus'];
// $message="lol";
        $message = "<style>
        @font-face {
          font-family: 'Dancing Script';
          font-style: normal;
          font-weight: 700;
          font-display: swap;
          src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Rep8ltA.woff2) format('woff2');
          unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
          }
          @font-face {
          font-family: 'Dancing Script';
          font-style: normal;
          font-weight: 700;
          font-display: swap;
          src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03ROp8ltA.woff2) format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
          }
          @font-face {
          font-family: 'Dancing Script';
          font-style: normal;
          font-weight: 700;
          font-display: swap;
          src: url(https://fonts.gstatic.com/s/dancingscript/v15/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Sup8.woff2) format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
          }
        </style>
        <table
          style=\"table-layout:fixed;vertical-align:top;min-width:320px;margin:0 auto;border-spacing:0;border-collapse:collapse;background-color:#ffffff;width:100%;line-height:inherit\"
          valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#ffffff\">
          <tbody style=\"line-height:inherit\">
            <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\" valign=\"top\">
              <td style=\"word-break:break-word;vertical-align:top;line-height:inherit;border-collapse:collapse;background-image:url('');background-size:contain\"
                valign=\"top\">
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:30px;padding-bottom:30px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div style=\"padding-right:0px;padding-left:0px;line-height:inherit\"
                              align=\"center\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;background-image:url('');background-position:top center;background-repeat:no-repeat;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div style=\"line-height:inherit\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:20px;padding-bottom:15px;padding-right:0px;padding-left:0px;line-height:inherit;\">
                            <div style=\"padding-right:0px;padding-left:0px;line-height:inherit;display: inline-block;\"
                              align=\"center\">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div
                              style=\"color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px\">
                              <div
                                style=\"line-height:1.2;font-size:12px;color:#000000;font-family:'Dancing Script','Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif\">
                                <p
                                  style=\"line-height:1.2;word-break:break-word;font-size:20px;margin:0;text-align:center;\">
                                  <span style=\"font-size:20px;line-height:inherit\"><b>Hi,".$_SESSION['nameus']."<br>Thank You For Participation Your Response has been submitted.</b></span>
                                  <br>
                                
                                  <p
                                              style=\"line-height:1.2;word-break:break-word;text-align:center;font-size:14px;margin:0\">
                                              <span style=\"font-size:16px;line-height:inherit\"><i
                                                  style=\"line-height:inherit\">Thank You,</i>
                                                <b style=\"line-height:inherit\"><i
                                                    style=\"line-height:inherit\"><span class=\"il\">PRJ2021DCS026</span>
                                                    <span class=\"il\">Team</span></i></b></span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:15px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div
                              style=\"font-family:Montserrat,&quot;Trebuchet MS&quot;,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,&quot;Lucida Sans&quot;,Tahoma,sans-serif;line-height:1.2;padding:10px\">
                              <div
                                style=\"line-height:1.2;font-family:'Dancing Script',Montserrat,&quot;Trebuchet MS&quot;,&quot;Lucida Grande&quot;,&quot;Lucida Sans Unicode&quot;,&quot;Lucida Sans&quot;,Tahoma,sans-serif\">
                                
                                <p
                                  style=\"color:rgb(0,0,0);font-size:18px;line-height:1.2;word-break:break-word;margin:0px\">
                                </p>
                                <p
                                  style=\"color:rgb(0,0,0);font-size:18px;line-height:1.2;word-break:break-word;margin:0px\">
                                </p>
                                <ul style=\"color:rgb(0,0,0)\"></ul>
                                <div style=\"color:rgb(0,0,0);font-size:12px;text-align:center\">
                                  <div dir=\"ltr\" style=\"text-align:center\">
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div
                              style=\"color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px\">
                              <div
                                style=\"line-height:1.2;font-size:12px;color:#000000;font-family:'Montserrat','Trebuchet MS','Lucida Grande','Lucida Sans Unicode','Lucida Sans',Tahoma,sans-serif\">
                                <p
                                  style=\"line-height:1.2;word-break:break-word;text-align:center;font-size:14px;margin:0\">
                                  <span style=\"font-size:16px;line-height:inherit\"><i
                                      style=\"line-height:inherit\">Thank You,</i>
                                    <b style=\"line-height:inherit\"><i
                                        style=\"line-height:inherit\"><span class=\"il\">PRJ2021DCS026</span>
                                        <span class=\"il\">Team</span></i></b></span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:0px;padding-bottom:5px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <table
                              style=\"table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;min-width:100%;line-height:inherit\"
                              valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                              <tbody style=\"line-height:inherit\">
                                <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                  valign=\"top\">
                                  <td style=\"word-break:break-word;vertical-align:top;min-width:100%;padding-top:15px;padding-right:10px;padding-bottom:10px;padding-left:10px;line-height:inherit;border-collapse:collapse\"
                                    valign=\"top\">
                                    <table
                                      style=\"table-layout:fixed;vertical-align:top;border-spacing:0;border-collapse:collapse;border-top:2px solid #e8d7c5;width:100%;line-height:inherit\"
                                      valign=\"top\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"
                                      border=\"0\" align=\"center\">
                                      <tbody style=\"line-height:inherit\">
                                        <tr style=\"vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                          valign=\"top\">
                                          <td style=\"word-break:break-word;vertical-align:top;line-height:inherit;border-collapse:collapse\"
                                            valign=\"top\"><span
                                              style=\"line-height:inherit\"></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"background-color:transparent;line-height:inherit\">
                  <div
                    style=\"margin:0 auto;min-width:320px;max-width:635px;word-wrap:break-word;word-break:break-word;background-color:transparent;line-height:inherit\">
                    <div
                      style=\"border-collapse:collapse;display:table;width:100%;background-color:transparent;line-height:inherit\">
                      <div
                        style=\"min-width:320px;max-width:635px;display:table-cell;vertical-align:top;width:635px;line-height:inherit\">
                        <div style=\"width:100%!important;line-height:inherit\">
                          <div
                            style=\"border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:60px;padding-bottom:5px;padding-right:0px;padding-left:0px;line-height:inherit\">
                            <div style=\"line-height:inherit\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        ";
        $subject = "Thank You ".$_SESSION['nameus']." Your response has been submitted";
           
        $mailSent = send_mail($email, $message, $subject,$file_path1);
        if ($mailSent) {
          // echo "hello";
            if(session_destroy()) {
          header('location:lastthankyoupage.php');
            }
        } else {
          // echo "world";
                  }
 ?>

