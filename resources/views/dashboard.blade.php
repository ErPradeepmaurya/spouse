@extends('layouts.app')
@section('title', 'Home Page')
@section('content')


    <section>
        <div class="db">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="db-nav">
                            <div class="db-nav-pro">
                                <img src="images/profiles/12.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="db-nav-list">
                                <ul>
                                    <li>
                                        <a href="user-dashboard.html">
                                            <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="fa fa-male" aria-hidden="true"></i>Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="user-chat.html" class="act">
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>Chat list
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-plan.html">
                                            <i class="fa fa-money" aria-hidden="true"></i>Plan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-setting.html">
                                            <i class="fa fa-cog" aria-hidden="true"></i>Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>Log out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="row">
                            <div class="col-md-12 db-sec-com">
                                <h2 class="db-tit">Chat list</h2>
                                <div class="db-pro-stat">
                                    <div class="db-chat">
                                        <ul>
                                            <li class="db-chat-trig">
                                                <div class="db-chat-pro">
                                                    <img src="images/profiles/1.jpg" alt="">
                                                </div>
                                                <div class="db-chat-bio">
                                                    <h5>Ashley emyy</h5>
                                                    <span>Hi Anna, How are you?</span>
                                                </div>
                                                <div class="db-chat-info">
                                                    <div class="time new">
                                                        <span class="timer">9:00 PM</span>
                                                        <span class="cont">3</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="chatbox">
                                    <span class="comm-msg-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="inn">
                                        <form name="new_chat_form" method="post">
                                            <div class="s1">
                                                <img src="images/user/2.jpg" class="intephoto2" alt="">
                                                <h4><b class="intename2">Julia</b>,</h4>
                                                <span class="avlsta avilyes">Available online</span>
                                            </div>
                                            <div class="s2 chat-box-messages">
                                                <span class="chat-wel">Start a new chat!!! now</span>
                                                <div class="chat-con">
                                                    <div class="chat-lhs">Hi</div>
                                                    <div class="chat-rhs">Hi</div>
                                                </div>
                                            </div>
                                            <div class="s3">
                                                <input type="text" name="chat_message"
                                                    placeholder="Type a message here.." required="">
                                                <button id="chat_send1" name="chat_send" type="submit">Send <i
                                                        class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="chatbox">
        <span class="comm-msg-pop-clo"><i class="fa fa-times" aria-hidden="true"></i></span>
        <div class="inn">
            <form name="new_chat_form" method="post">
                <div class="s1">
                    <img src="images/user/2.jpg" class="intephoto2" alt="">
                    <h4><b class="intename2">Julia</b>,</h4>
                    <span class="avlsta avilyes">Available online</span>
                </div>
                <div class="s2 chat-box-messages">
                    <span class="chat-wel">Start a new chat!!! now</span>
                    <div class="chat-con">
                        <div class="chat-lhs">Hi</div>
                        <div class="chat-rhs">Hi</div>
                    </div>
                </div>
                <div class="s3">
                    <input type="text" name="chat_message" placeholder="Type a message here.." required="">
                    <button id="chat_send1" name="chat_send" type="submit">Send <i class="fa fa-paper-plane-o"
                            aria-hidden="true"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Open chatbox when the chat trigger is clicked
            $(".db-chat-trig").on('click', function() {
                $(".chatbox").addClass("open");
            });

            // Close chatbox when the close button is clicked
            $(".comm-msg-pop-clo").on('click', function() {
                $(".chatbox").removeClass("open");
            });
        });
    </script>


@endsection
