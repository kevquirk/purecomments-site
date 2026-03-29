<footer>
    <p>&copy; <?= e((new DateTimeImmutable('now', site_timezone_object($config)))->format('Y')) ?> <?= e($config['site_title']) ?></p>

    <p><a href="/changelog">Changelog</a> | <a href="https://purecommons.org">Pure Commons</a></p>
</footer>
