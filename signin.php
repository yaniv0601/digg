<?php 

require_once 'app/helpers.php';
$page_title = 'Sign In';

?>

<?php get_header(); ?>

<main class="mh-900">
    <div class="container">
        <section id="signin-form-content">
            <div class="row">
                <div class="col-lg-6">
                    <form id="signin-form" action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Sign In</button>

                    </form>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>