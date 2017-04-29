<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now! -->

<div class="wrap">
    <div class="one sidebar">
        <div class="widget">
            <ul>
                <li class="active"><a href="index.html" class="icon">Home</a></li>
                <li><a href="songs.html" class="icon">Songs</a></li>
                <li><a href="Applications.html" class="icon">Applications</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
<!-- <div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
</div> -->
        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Specification</a></li>

            <li role="presentation"><a href="#results" aria-controls="results" role="tab" data-toggle="tab">Results</a></li>

            <li role="presentation"><a href="#submit" aria-controls="submit" role="tab" data-toggle="tab">Submit</a></li>

            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="specification"><br /><br /></div>

                <div role="tabpanel" class="tab-pane" id="results">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Rank</th>
                                    <th>User</th>
                                    <th>Accuracy</th>
                                </tr>
                                <tr class="active">
                                  <td >...</td>
                                  <td >...</td>
                                  <td >...</td>
                                </tr>
                                <tr class="info">
                                  <td >...</td>
                                  <td >...</td>
                                  <td >...</td>
                                </tr>
                            </table>
                        </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="submit">...</div>
            </div>

        </div>
            <div class="clearFloat"></div>

            
    </div>
</div>

<?php htmlFooter(); ?>