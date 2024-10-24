<!-- Andreu Sánchez Guerrero -->
<div class="pagination">
    <?php if ($totalPages > 1): ?>
        <ul>
            <?php if ($page > 1): ?>
                <li><a href="?page=<?php echo $page - 1; ?>">Previous</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li><a href="?page=<?php echo $i; ?>" class="<?php if ($i == $page) echo 'active'; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <li><a href="?page=<?php echo $page + 1; ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>
