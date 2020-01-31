<!DOCTYPE html>
<html>
<style>
table
{
border-style:solid;
border-width:2px;
border-color:teal;
}
</style>
</head>
<body bgcolor="#ADD8E6">
</body>
</html>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
 # echo 'not connected'; 
  }
#echo 'connected'; 
 mysql_select_db("qwe", $con);

$value = $_POST['select'];
$a = $_POST['choice'];

/*ARP PACKETS*/
 if($a == "arp")
{
/*ALL FIELDS*/
if($value == "all_fields")
{
$result = mysql_query("SELECT * FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
<th>Source_mac</th> 
<th>Des_mac</th> 
<th>pointer_length</th> 
<th>Source_ip</th> 
<th>Des_ip</th> 
<th>Source_port</th> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "<td>" . $row['Des_mac'] . "</td>";
  echo "<td>" . $row['Pointer_length'] . "</td>";
 echo "<td>" . $row['Source_ip'] . "</td>";
 echo "<td>" . $row['Des_ip'] . "</td>";
 echo "<td>" . $row['Source_Port'] . "</td>";
 echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* SOURCE MAC ADDRESS*/
if($value == "source_mac")
{
$result = mysql_query("SELECT Source_mac FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE IP ADDRESS*/
if($value == "source_ip")
{
$result = mysql_query("SELECT Source_ip FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE PORT*/
if($value == "source_port")
{
$result = mysql_query("SELECT Source_Port FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*DESTINATION MAC ADDRESS*/
if($value == "dest_mac")
{
$result = mysql_query("SELECT Des_mac FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['Des_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/* DESTINATION IP*/
if($value == "des_ip")
{
$result = mysql_query("SELECT Des_ip FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['Des_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* DESTINATION PORT*/
if($value == "des_port")
{
$result = mysql_query("SELECT Des_Port FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*TIME STAMP*/

if($value == "timestamp")
{
$result = mysql_query("SELECT Timestamp FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/*POINTER LENGTH*/
if($value == "pointer_length")
{
$result = mysql_query("SELECT Pointer_length FROM arp1_fields");
echo "<table border='1'> 
<tr> 
<th>pointer_length</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>" . $row['Pointer_length'] . "</td>";
   echo "</tr>";
  }
echo "</table>";
}
}
/* UDP SELECTION*/
else if($a == "udp")
{
/*ALL FIELDS*/
if($value == "all_fields")
{
$result = mysql_query("SELECT * FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
<th>Source_mac</th> 
<th>Des_mac</th> 
<th>pointer_length</th> 
<th>Source_ip</th> 
<th>Des_ip</th> 
<th>Source_port</th> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "<td>" . $row['Des_mac'] . "</td>";
  echo "<td>" . $row['Pointer_length'] . "</td>";
 echo "<td>" . $row['Source_ip'] . "</td>";
 echo "<td>" . $row['Des_ip'] . "</td>";
 echo "<td>" . $row['Source_Port'] . "</td>";
 echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* SOURCE MAC ADDRESS*/
if($value == "source_mac")
{
$result = mysql_query("SELECT Source_mac FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE IP ADDRESS*/
if($value == "source_ip")
{
$result = mysql_query("SELECT Source_ip FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE PORT*/
if($value == "source_port")
{
$result = mysql_query("SELECT Source_Port FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/*DESTINATION MAC ADDRESS*/
if($value == "dest_mac")
{
$result = mysql_query("SELECT Des_mac FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['Des_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/* DESTINATION IP*/
if($value == "des_ip")
{
$result = mysql_query("SELECT Des_ip FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['Des_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* DESTINATION PORT*/
if($value == "des_port")
{
$result = mysql_query("SELECT Des_Port FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*TIME STAMP*/

if($value == "timestamp")
{
$result = mysql_query("SELECT Timestamp FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*POINTER LENGTH*/
if($value == "pointer_length")
{
$result = mysql_query("SELECT Pointer_length FROM udp1_fields");
echo "<table border='1'> 
<tr> 
<th>pointer_length</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['Pointer_length'] . "</td>";
   echo "</tr>";
  }
echo "</table>";
}
}
/* IP FIELDS*/
else if($a == "ip")
{
/*ALL FIELDS*/
if($value == "all_fields")
{
$result = mysql_query("SELECT * FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
<th>Source_mac</th> 
<th>Des_mac</th> 
<th>pointer_length</th> 
<th>Source_ip</th> 
<th>Des_ip</th> 
<th>Source_port</th> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "<td>" . $row['Des_mac'] . "</td>";
  echo "<td>" . $row['Pointer_length'] . "</td>";
 echo "<td>" . $row['Source_ip'] . "</td>";
 echo "<td>" . $row['Des_ip'] . "</td>";
 echo "<td>" . $row['Source_Port'] . "</td>";
 echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/* SOURCE MAC ADDRESS*/
if($value == "source_mac")
{
$result = mysql_query("SELECT Source_mac FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE IP ADDRESS*/
if($value == "source_ip")
{
$result = mysql_query("SELECT Source_ip FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*SOURCE PORT*/
if($value == "source_port")
{
$result = mysql_query("SELECT Source_Port FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Source_port</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Source_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/*DESTINATION MAC ADDRESS*/
if($value == "dest_mac")
{
$result = mysql_query("SELECT Des_mac FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_mac</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
echo "<td>" . $row['Des_mac'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* DESTINATION IP*/
if($value == "dest_ip")
{
$result = mysql_query("SELECT Des_ip FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_ip</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
 echo "<td>" . $row['Des_ip'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/* DESTINATION PORT*/
if($value == "des_port")
{
$result = mysql_query("SELECT Des_Port FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Des_port</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Des_Port'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}
/*TIME STAMP*/

if($value == "timestamp")
{
$result = mysql_query("SELECT Timestamp FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>Timestamp</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Timestamp'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}

/*POINTER LENGTH*/
if($value == "pointer_length")
{
/*POINTER LENGTH*/
if($value == "pointer_length")
{
$result = mysql_query("SELECT Pointer_length FROM ip1_fields");
echo "<table border='1'> 
<tr> 
<th>pointer_length</th> 
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
    echo "<td>" . $row['Pointer_length'] . "</td>";
   echo "</tr>";
  }
echo "</table>";
}
}
 mysql_close($con);
?>
</body>
</html>

