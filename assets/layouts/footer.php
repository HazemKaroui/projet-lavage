
<?php // if (isset($_SESSION['auth'])) { ?>

</body>

    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo">
                        <a href="#" target="_blank"> 
                            <img src="../assets/images/car wash (4).png" alt="" width="200" height="200" class="">
                        </a>
                    </h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../welcome/" target="_blank">Welcome</a></li>
                        <li><a href="../login/" target="_blank">Log in</a></li>
                        <li><a href="../register/" target="_blank">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Features</h5>
                    <ul>
                        <li><a href="../reservation/" target="_blank">Reservation</a></li>
                        <li><a href="../dashboard/" target="_blank">Dashboard</a></li>
                        <li><a href="../profile-edit/" target="_blank">Edit Profile</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="../contact/" target="_blank">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 my-3">
                    <div class="social-networks">
                        <a href="#" class="facebook" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <a class="btn btn-default" href="mailto:inserer un email ici" target="_blank">Email Ue</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>
                Made with ❤️ at Poly | 
                <a href="https://github.com/HazemKaroui/projet-lavage" target="_blank">Github repo</a>
            </p>
        </div>
    </footer>

<?php // } ?>


<script src="../assets/vendor/js/jquery-3.4.1.min.js"></script>
<script src="../assets/vendor/js/popper.min.js"></script>
<script src="../assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<?php if(isset($_SESSION['auth'])) { ?> 

<script src="../assets/js/check_inactive.js"></script>
    
<?php } ?>


</body>

</html>

<?php

if (isset($_SESSION['ERRORS']))
    $_SESSION['ERRORS'] = NULL;
if (isset($_SESSION['STATUS']))
    $_SESSION['STATUS'] = NULL;

?>
