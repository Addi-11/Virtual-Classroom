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
                                <i class="copy icon"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twelve wide column">
            <div class="ui fluid icon input">
                <input type="text" placeholder="Announce something to your class...">
                <i class="bullhorn icon"></i>
            </div>
        </div>
    </div>

</div>

</body>


<script src="../../js/sidebar.js" type="text/javascript"></script>

</html>