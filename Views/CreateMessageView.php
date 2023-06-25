<!DOCTYPE html>
<html>
<head>
    <title>Test Task for Intetics</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-offset-sm-3"></div>
        <div class="col-sm-6">
            <h2 class="text-center">Test Task</h2>
            <form method="post">
                <div class="form-group">
                    <textarea class="form-control" id="userMessage" name="userMessage" rows="3"></textarea>
                </div>
                <input type="hidden" name="csrfToken" value="<?php echo $csrfToken ?? ""; ?>">
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
        <?php if (isset($lastUserMessage)): ?>

            <h3>Your message was successfully saved and sent by Email</h3>

            <pre><?php echo htmlentities($lastUserMessage) ?></pre>

        <?php else: ?>

            <em>No message inserted</em>

        <?php endif; ?>
    </div>
</div>

</body>
<script type="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</html>