<html>
<head>
<title>insert page</title>
    <link rel="stylesheet" type="text/css" href="adminaccount.css">
    </head>
    <body bgcolor="red">
        <header>
            <div class="main">
        <div class="logo">
         <img src="adminlogo.jpg">
        </div>
            <div>
    <ul>
        <li><a href="updatepage.html">UPDATE</a></li>
        <li><a href="insert.html">INSERT</a></li>
        <li class="active"><a href="#">SVR-DETAILS</a></li>
        <li><a href="mainpage.html">LOG-OUT</a></li>
    </ul>
    </div>
            </div>

            <div class="mainlogo">
            <img src="admin.png">
            </div>
<div class="content">
    <h1>USER  /  CUSTOMER DETAILS</h1>
    <center>
    <table border="3px">
            
            <tr>
        <th>USER-NAME</th>
                <th>E-MAIL</th>
                <th>DATE OF BIRTH</th>
                <th>PHONE NUMBER</th>
        </tr>
            <?php 
        $database="project";
$con=mysqli_connect("localhost","root","") or die("unable to connect host");
                $sql=mysqli_select_db($con,$database)or die("unable to connect to database");
        $sql="select * from createaccount";
        $sql=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($sql))
        {
        ?>
        <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['mobile'];}?></td>
        </tr>
           </table>
        
        <br/><br/>
        <h1>BOOKS DETAILS</h1>
        <table border="3px">
            <tr>
        <th>BOOK NAME</th>
        <th>BOOK CODE</th>
        <th>LIBRARY BOOK</th>    
        <th>SALES BOOK</th>
            </tr>
            <?php
            $sql="select * from books";
        $sql=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($sql))
        {
        ?>
        <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['bookcode'];?></td>
        <td><?php echo $row['librarybook'];?></td>
            <td><?php echo $row['salesbook'];}?></td>
        </tr>
            
        </table><br><br>
        <h1>BOOKS PENDING DETAILS</h1>
        <table border="3px">
        <tr>
        <th>User e-mail id</th>
        <th>BOOK CODE</th>
            <th>ISSUE DATE</th>
            <th>FINE</th>
            </tr>
            <?php
            $sql="select * from customer";
        $sql=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($sql))
        {
        ?>
        <tr>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['bookname'];?></td>
            <td><?php echo $row['issuedate'];?></td>
            <td><?php
            $issuedate=$row['issuedate'];
            $issuedate=strtotime($issuedate);
            if($issuedate==0)
                echo "0";
            else{
                    $currdate=date("Y-m-d");
                        $currdate=strtotime($currdate);
                        $diff=$currdate-$issuedate;
                        $diff=round($diff/(60*60*24));
                        $fine="0";
                        if($diff>15)
                            $fine="50";
                        if($diff>15 && $diff<20)
                            $fine="100";
                        if($diff>20 && $diff<30)
                            $fine="500";
                        if($diff>30)
                            $fine="1000";
        echo $fine;}} mysqli_close($con);?></td>
        </tr>
        </table>
        </center>
            </div>
        </header>
    </body>
</html>