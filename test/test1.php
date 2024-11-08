<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Tabs with Next Button</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="tab1" data-toggle="tab" href="#content1" role="tab">Tab 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2" data-toggle="tab" href="#content2" role="tab">Tab 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab3" data-toggle="tab" href="#content3" role="tab">Tab 3</a>
        </li>
    </ul>

    <!-- Tab panes -->
 <!-- Tab panes -->
 <div class="tab-content">
        <div class="tab-pane fade show active" id="content1" role="tabpanel">
            <h3>Content 1</h3>
            <p>This is the content of Tab 1.</p>
            <button class="btn btn-primary next-tab">Next</button>
        </div>
        <div class="tab-pane fade" id="content2" role="tabpanel">
            <h3>Content 2</h3>
            <p>This is the content of Tab 2.</p>
            <button class="btn btn-primary next-tab">Next</button>
        </div> 
        <div class="tab-pane fade" id="content3" role="tabpanel">
            <h3>Content 3</h3>
            <p>This is the content of Tab 3.</p> 
            <!-- No Next button since this is the last tab -->
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $(".next-tab").click(function() {
            var nextTab = $('.nav-tabs .nav-link.active').parent().next().find('.nav-link');
            if (nextTab.length) {
                nextTab.tab('show');
            }
        });
    });
</script>
</body>
</html>