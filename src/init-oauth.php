<?php

$discord_url = "{https://discord.com/api/oauth2/authorize?client_id=1022469036673618000&redirect_uri=https%3A%2F%2Fcccproo.github.io%2Findex.html&response_type=code&scope=identify}";
header("Location: $discord_url");
exit();

?>
