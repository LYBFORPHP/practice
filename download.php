<?php
    $file_name="中文.jpg";
    $file_name=iconv("utf-8","gb2312",$file_name);
    if (!file_exists($file_name)){
    echo "文件不存在";
    return ;
    }
    $fp=fopen($file_name,"r");
    $file_size=filesize($file_name);
  

    
    //返回的文件
          header("Content-type: application/octet-stream");
              //按照字节大小返回
           header("Accept-Ranges: bytes");
              //返回文件大小
           header("Accept-Length: $file_size");
           //这里客户端的弹出对话框，对应的文件名
           header("Content-Disposition: attachment; filename=".$file_name);
           $buffer="1024";
           while (!feof($fp)){
           $file_data=fread($fp,$buffer);
           echo $file_data;
           }
           fclose($fp);
           