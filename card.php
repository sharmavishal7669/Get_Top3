<div>
    <div style="width: 360px;">
        <div class="card mt-5 forms">
            <div class="h2 card-header modal-title text-center">            
                <div><img src="imgs/arogya-setu.jpg" alt="Priduct Image Here" style="width:290px;height:400px;"></div>
                <h5 >
                    <span class="text-muted"><?php echo "ID : ".($user->id); ?></span>
                </h5>
            </div>
            <div class="card-body">
                <?php
                    echo "NAME :".($user->firstName)." ".($user->lastName)."<br>";
                    echo "E-mail :".$user->email."<br>";
                    echo "Phone NO. :".$user->phoneNo;
                ?>
            </div>
        </div>
    </div>
</div>