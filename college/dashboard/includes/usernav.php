
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            
            
            

<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" class="active"><i class="fa fa-fw fa-dashboard"></i>All Documents</a>
                    </li>
                <?php 
                $count=0;
                if($count==1) {
                    ?>
                   <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./users.php">View All Users</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-file-text"></i> My Account <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./viewprofile.php?name=<?php echo $_SESSION['username']; ?>"> View Profile</a>
                            </li>
                            <li>
                                <a href="./userprofile.php?section=<?php echo $_SESSION['username']; ?>">Edit Profile</a>
                            </li>
                        </ul>
                        </li>
                            
                    <?php } else { ?>

                    <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> My Documentss <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./notes.php">View My Documents</a>
                            </li>
                            <li>
                                <a href="./uploadnote.php">Upload Document</a>
                            </li>
                            
                        </ul>
                    </li>
                   

<?php } ?>
                </ul>
            </div>
        </nav>