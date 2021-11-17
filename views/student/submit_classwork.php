<?php
include_once 'sidebar.php';
?>

<div class="left-container">
    <div class="ui grid">
        <div class="sixteen wide column">
            <a class="item" href="">
                <i class="arrow alternate circle left icon"></i>
                Back
            </a>
        </div>
        <div class="ui eleven wide column">
            <h1 class="ui huge header">
                <i class="book icon"></i>
                <div class="content">
                    Classroom Name - Classwork Title
                </div>
            </h1>
            <div class="content">
                <div class="ui right aligned tiny grey header">
                    Due Date : 12th-Nov
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="content">
                <div class="ui medium header">
                    Classwork Topic
                </div>
                <div class="ui segment">
                    <div class="ui small header">
                        Instructions
                    </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut officia, atque, consequuntur a quae placeat quod hic cupiditate nemo laudantium fugit temporibus et asperiores veniam assumenda maiores ab eos sequi!
                </div>
            </div>
        </div>
        <div class="ui five wide column">
            <div class="ui card">
                <div class="content">
                    <span class="right floated">
                        <div class="ui tiny green header">Assigned</div>
                    </span>
                    <div class="header">Your Work</div>
                </div>
                <div class="extra content">
                    <button class="fluid ui basic button">
                        <i class="plus icon"></i>
                        Add or Create
                    </button>
                    <br>
                    <button class="fluid ui button">Turn in</button>
                </div>
            </div>
            <div class="ui card">
                <div class="content">
                    <div class="ui tiny header">
                        <i class="user outline icon"></i>
                        Add Private Comments
                    </div>
                    <form action="" method="post">
                        <div class="ui fluid icon input">

                            <img class="ui avatar image" src="../../images/student.jpg">
                            <input type="text" name="comment" placeholder="Add Private a comment.">
                            <button class="ui icon button">
                                <i class="paper plane outline icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>