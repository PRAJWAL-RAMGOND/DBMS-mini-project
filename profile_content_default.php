<div style="display: flex;">
            <div style="min-height: 400px;flex: 1;">
                <div id="friends_bar">
                    Friends<br>
                    
                    <?php
                    if($friends)
                    {
                        foreach ($friends as  $FRIEND_ROW)
                         {
                            // code...

                            include("user.php");
                        }
                    }
                        
                    ?>
                    
                </div>
            </div>

            <div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">
                <div style="border: solid thin #aaa;padding: 10px;background-color: white;">
                    <form method="post" enctype="multipart/form-data">
                            <textarea name="post" placeholder="What's on your Mind?"></textarea>
                            <input type="file" name="file">
                            <input id="post_button" type="submit" value="Post"><br>
                    </form>
                </div>

                <div id="post_bar">
                    
                    <?php
                    if($posts)
                    {
                        foreach ($posts as  $ROW)
                         {
                            // code...

                            $user = new User();
                            $ROW_USER =  $user->get_user($ROW['userid']);

                            include("post.php");
                        }
                    }
                        
                    ?>

                </div>
            </div>
        </div>