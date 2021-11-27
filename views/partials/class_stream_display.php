<div class="ui bottom attached segment">
    <div class="ui block header">
        <h1 class="ui header">
            <?= $result["subject_name"] ?>
            <div class="ui sub header"><?= $result["subject_code"] ?></div>
        </h1>
        <div class="ui grey tiny header">
            Batch &ensp; : <?= $result["batch"]; ?><br>
            Section : <?= $result["section"]; ?><br>
            Room &ensp; : <?= $result["room_number"]; ?><br>
        </div>
    </div>
    <div class="ui grid">
        <div class="four wide column ">
            <div class="ui cards">
                <div class="card">
                    <div class="content">
                        <div class="ui tiny header">Class Code :</div>
                        <div class="ui huge header ">
                            <?= $result["classroom_code"] ?>
                            <span class="right floated">
                                <button class="ui basic icon button">
                                    <i class="teal copy icon"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twelve wide column">
            <form action="../../includes/process_class_comments.php?class_code=<?php echo $class_code; ?>" method="post">
                <div class="ui fluid icon input">
                    <input type="text" name="comment" placeholder="Announce something to your class...">
                    <button class="ui right labeled icon button">
                        <i class="paper plane outline icon"></i>
                        Post
                    </button>
                </div>
            </form>

            <?php include '../class_comments.php' ?>

        </div>
    </div>

</div>

</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>