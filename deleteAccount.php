
<div class="modal fade left" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="deleteAccount" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning modal-side modal-bottom-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color:#18191a">
                <p class="heading" style="color: white"><strong>Delete Account?</strong></p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body" style="background-color:#000; color: white">

                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <img src="images/Love.png" alt="Team Member" class="img-fluid">
                        <div style="height: 10px"></div>
                        <p class="title mb-0">Patrick</p>
                        <p class="text-muted " style="font-size: 13px">Love</p>
                    </div>

                    <div class="col-9">
                        <p>Hey there! Before you go, I just wanted to say that I appreciate you checking out the site! The team and I hope that you change your mind one day and come back! Until then, have a wonderful day!</p>
                        <p class="card-text"><strong>Are you sure you want to delete your account?</strong></p>
                        <p class="card-text"><strong>If so, we are sad to see you go.</strong></p>
                    </div>
                </div>


            </div>

            <form method="post" action="login.php">
                
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="cart-btn flex-c-c tisubtxt-2 text-uppercase color-0 bg-11 bo-all-2 bdrcolor-12 hov-btn1" name="Delete">Yes, thank you.</button>
                    <a type="button" class="cart-btn flex-c-c tisubtxt-2 text-uppercase color-14 bg-0 bo-all-2 bdrcolor-12 hov-btn1 trans-02" data-dismiss="modal">No, thanks</a>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
