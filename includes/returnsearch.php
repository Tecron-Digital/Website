<?php  

include "../includes/db_connect.php";

if(isset($_GET['postsearch'])){


}
else{
exit("You are not allowed to access this page");

}

$searchQuery = mysqli_escape_string($userConnect,$_GET['postsearch']);




if($searchQuery == ""){
    $query = "SELECT * FROM posts ORDER BY ID DESC;";

}
else{

    $query = "SELECT * FROM posts WHERE title='$searchQuery';";

}

$returned = mysqli_query($userConnect,$query);


    $result = mysqli_num_rows($returned);

    if($result >=1 ){


    }
    else{
echo "<center>No posts matching your search were found</center>";
exit();

    }

    while($row = mysqli_fetch_assoc($returned)){ ?>
        <div class="blogPost">
            <div class="postImg"><img src="../uploads/<?php echo $row['featured_image']?> "></div>
        <div class="postTitle"><?php echo $row["title"]; ?> </div><br><Br>
        
        <div class="postBody"><?php
        $str = $row['body'] ;
        if(strlen($str) > 50){
           
            
            $str = substr($str,0,50);
            echo "$str" . "..." ?><a href="post.php?id=<?php echo $row["id"]; ?>">Read more</a> <?php
            
              }  
              else{
                  echo $str;
              }
            
         ?></div>
         <div class="postCategory">-<?php echo $row["category"]; ?></div>
        <div class="postDate"><?php echo $row["date"]; ?></div>
        
        
        </div>
    
        <?php }; ?>
    
    