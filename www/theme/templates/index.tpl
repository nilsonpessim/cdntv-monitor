<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>CDNTV - Status</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>

        <div class="container mt-5">
            <div class="row">

                {foreach $channels as $c}
                    {if $c->live == true}
                        {$color = ($c->health < {$min_value}) ? 'bg-danger' : 'bg-success'}
                        {$status = ($c->health < {$min_value}) ? 'Instável' : 'Estável'}
                        <div class="col-sm-2 mt-3">
                            <div class="card">
                                <div class="card-header text-light {$color}">
                                    {$c->name}
                                </div>
                                <div class="card-body">
                                    <h4>{$status}</h4>
                                    Saúde: {$c->health}
                                </div>
                            </div>
                        </div>
                    {/if}
                {/foreach}

            </div>
        </div>

    </body>
</html>