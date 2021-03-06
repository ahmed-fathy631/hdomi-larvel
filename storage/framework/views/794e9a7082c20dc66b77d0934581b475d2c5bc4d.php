<?php $__env->startSection('content'); ?>

    <style>

        html, body {
            background-image:url("../../imge/2.jpg");
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .bg-lightt{
            background-color:rgba(232,232,232,0.65);
        }
        .logo{
            width: 45px;
            border-radius:50% ;
        }

        .site-footer
        {
            background-color: rgba(0, 0, 0, 0.6);
            padding:45px 0 20px;
            border-radius: 50px ;
            font-size:15px;
            line-height:24px;
            color:#cccccc;
        }

        .site-footer hr
        {
            border-top-color:#bbb;
            opacity:0.5
        }
        .site-footer hr.small
        {
            margin:20px 0
        }
        .site-footer h6
        {
            color:#fff;
            font-size:16px;
            text-transform:uppercase;
            margin-top:5px;
            letter-spacing:2px
        }
        .site-footer a
        {
            color:#cccccc;
        }
        .site-footer a:hover
        {
            color:#cccccc;
            text-decoration:none;
        }
        .footer-links
        {
            padding-left:0;
            list-style:none
        }
        .footer-links li
        {
            display:block
        }
        .footer-links a
        {
            color:#cccccc;
        }
        .footer-links a:active,.footer-links a:focus,.footer-links a:hover
        {
            color:#3366cc;
            text-decoration:none;
        }
        .footer-links.inline li
        {
            display:inline-block
        }
        .site-footer .social-icons
        {
            text-align:right
        }
        .site-footer .social-icons a
        {
            width:40px;
            height:40px;
            line-height:40px;
            margin-left:6px;
            margin-right:0;
            border-radius:100%;
            background-color:#33353d
        }
        .copyright-text
        {
            margin:0
        }
        @media (max-width:991px)
        {
            .site-footer [class^=col-]
            {
                margin-bottom:30px
            }
        }
        @media (max-width:767px)
        {
            .site-footer
            {
                padding-bottom:0
            }
            .site-footer .copyright-text,.site-footer .social-icons
            {
                text-align:center
            }
        }
        .social-icons
        {
            padding-left:0;
            margin-bottom:0;
            list-style:none
        }
        .social-icons li
        {
            display:inline-block;
            margin-bottom:4px
        }
        .social-icons li.title
        {
            margin-right:15px;
            text-transform:uppercase;
            color:#96a2b2;
            font-weight:700;
            font-size:13px
        }
        .social-icons a{
            background-color:#eceeef;
            color:#818a91;
            font-size:16px;
            display:inline-block;
            line-height:44px;
            width:44px;
            height:44px;
            text-align:center;
            margin-right:8px;
            border-radius:100%;
            -webkit-transition:all .2s linear;
            -o-transition:all .2s linear;
            transition:all .2s linear
        }
        .social-icons a:active,.social-icons a:focus,.social-icons a:hover
        {
            color:#fff;
            background-color:#29aafe
        }
        .social-icons.size-sm a
        {
            line-height:34px;
            height:34px;
            width:34px;
            font-size:14px
        }
        .social-icons a.facebook:hover
        {
            background-color:#3b5998
        }
        .social-icons a.twitter:hover
        {
            background-color:#FCAF45;
        }
        .social-icons a.linkedin:hover
        {
            background-color:#007bb6
        }
        .social-icons a.dribbble:hover
        {
            background-color:#ea4c89
        }
        @media (max-width:767px)
        {
            .social-icons li.title
            {
                display:block;
                margin-right:0;
                font-weight:600
            }
        }

        .bold{
            color: #cccccc;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;
            border-radius: 30px;
        }
        .bold2{
            color: #cccccc;
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.5);
            text-align: center;

        }

        .back{
            width: 900px;
            height:100px;
            color: #cccccc;
            background-color: rgba(0, 0, 0, 0.3);
            text-align: center;
            border-radius: 30px;
        }

        .white{
            width: 900px;
            height:110px;
            color: #cccccc;
            background-color:rgba(232,232,232,0.4);
            text-align: center;
            border-radius: 30px;
        }

        .back2{
            width: 200px;
            height:70px;
            color: #cccccc;
            background-color: rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .border{
            border-radius: 40px;
            box-shadow: -30px -15px 30px 15px rgba(0, 0, 0, 0.9);
        }

        .about{
            width: 350px;
            height: 350px;
            opacity: 0.85;
            border-radius: 40px;
            box-shadow: -30px -15px 30px 15px rgba(0, 0, 0, 0.95);
        }

        .back3 {
            width: auto;
            height: 200px;
            color: #cccccc;
            background-color: rgba(0, 0, 0, 0.3);
            text-align: center;
            border-radius: 30px;
            padding: 20px;
        }

        .img{
            float: left;
        }

    </style>

    <div class="container mt-4">


            <div class="back3 mb-0 " style="height:550px;" >

                <img class=" img border"  src="<?php echo e(asset('storage/'.$trousere->image)); ?>" width="500px" height="500px">

                <div  class="mt-5">

                <div class="float-right mt-5" style="width:500px; ">

                    <p class="bold mt-5"><?php echo e($trousere->name); ?></p>

                    <p class="bold" ><?php echo e($trousere->price); ?>  L.E</p>

                    <p class="bold "><?php echo e($trousere->description); ?></p>

                    <a  href="<?php echo e(Route('Contact')); ?>"   type="button" class="btn btn-primary mt-5 " style="width: 100px;opacity: 0.5;">Buy</a>
                    <a  href="<?php echo e(route('trouseres.index')); ?>"   type="button" class="btn btn-light mt-5 " style="width: 100px;opacity: 0.5;">Back</a>

                </div>
                </div>
            </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\blog\resources\views/prodact/pant/show.blade.php ENDPATH**/ ?>