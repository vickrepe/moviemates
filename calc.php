<?php

$checkBuyChecked = isset($_POST['checkbuy']) ? 'checked' : '';
$checkSellChecked = isset($_POST['checksell']) ? 'checked' : '';

$mercado = isset($_POST['mercado']) ? $_POST['mercado'] : '';
$estrategia = isset($_POST['estrategy']) ? $_POST['estrategy'] : '';
$entrada = isset($_POST['numero']) ? $_POST['numero'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = "";
    $resultado_mercado = "";
    $resultado_sl = "";
    $resultado_tp = "";

    //BUYCHECK
    if (isset($_POST['checkbuy'])) {
        $resultText = "BUY";
        $mercado = $_POST['mercado'];
        $estrategia = $_POST['estrategy'];
        $entrada = $_POST['numero'];

        if ($mercado === 'eurusd') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP - 15SL
                $resultado_sl = "SL: " . ($entrada - 0.00150);
                $resultado_tp = "TP: " . ($entrada + 0.00200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP - 25SL
                $resultado_sl = "SL: " . ($entrada - 0.00250);
                $resultado_tp = "TP: " . ($entrada + 0.00300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP - 10SL
                $resultado_sl = "SL: " . ($entrada - 0.00100);
                $resultado_tp = "TP: " . ($entrada + 0.00150);
            }
        } elseif ($mercado === 'gbpusd') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP - 15SL
                $resultado_sl = "SL: " . ($entrada - 0.00150);
                $resultado_tp = "TP: " . ($entrada + 0.00200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP - 25SL
                $resultado_sl = "SL: " . ($entrada - 0.00250);
                $resultado_tp = "TP: " . ($entrada + 0.00300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP - 10SL
                $resultado_sl = "SL: " . ($entrada - 0.00100);
                $resultado_tp = "TP: " . ($entrada + 0.00150);
            }
        } elseif ($mercado === 'usdjpy') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP - 15SL
                $resultado_sl = "SL: " . ($entrada - 000.150);
                $resultado_tp = "TP: " . ($entrada + 000.200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP - 25SL
                $resultado_sl = "SL: " . ($entrada - 000.250);
                $resultado_tp = "TP: " . ($entrada + 000.300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP - 10SL
                $resultado_sl = "SL: " . ($entrada - 000.100);
                $resultado_tp = "TP: " . ($entrada + 000.150);
            }
        }
    }

    if (isset($_REQUEST['checksell'])) {
        $resultText = "SELL";
        $mercado = $_POST['mercado'];
        $estrategia = $_POST['estrategy'];
        $entrada = $_POST['numero'];

        if ($mercado === 'eurusd') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP - 15SL
                $resultado_sl = "SL: " . ($entrada + 0.00150);
                $resultado_tp = "TP: " . ($entrada - 0.00200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP + 25SL
                $resultado_sl = "SL: " . ($entrada + 0.00250);
                $resultado_tp = "TP: " . ($entrada - 0.00300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP + 10SL
                $resultado_sl = "SL: " . ($entrada + 0.00100);
                $resultado_tp = "TP: " . ($entrada - 0.00150);
            }
        } elseif ($mercado === 'gbpusd') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP + 15SL
                $resultado_sl = "SL: " . ($entrada + 0.00150);
                $resultado_tp = "TP: " . ($entrada - 0.00200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP + 25SL
                $resultado_sl = "SL: " . ($entrada + 0.00250);
                $resultado_tp = "TP: " . ($entrada - 0.00300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP + 10SL
                $resultado_sl = "SL: " . ($entrada + 0.00100);
                $resultado_tp = "TP: " . ($entrada - 0.00150);
            }
        } elseif ($mercado === 'usdjpy') {
            if ($estrategia === 'e1') {
                // Realizar los cálculos para EURUSD y 20TP + 15SL
                $resultado_sl = "SL: " . ($entrada + 000.150);
                $resultado_tp = "TP: " . ($entrada - 000.200);
            } elseif ($estrategia === 'e2') {
                // Realizar los cálculos para EURUSD y 30TP + 25SL
                $resultado_sl = "SL: " . ($entrada + 000.250);
                $resultado_tp = "TP: " . ($entrada - 000.300);
            } elseif ($estrategia === 'e3') {
                // Realizar los cálculos para EURUSD y 15TP + 10SL
                $resultado_sl = "SL: " . ($entrada + 000.100);
                $resultado_tp = "TP: " . ($entrada - 000.150);
            }
        }
    }
}
?>
<?php include 'header.php'; ?>
<main class="content">
    <h2>Calculadora de PIPs</h2>
    <form action="" method="post">
        <div class="checkbox-group required">
            <input type="checkbox" id="checkbuy" name="checkbuy" value="checkbuy" class="checkbox-single" <?php echo $checkBuyChecked; ?>> BUY
            <input type="checkbox" id="checksell" name="checksell" value="checksell" class="checkbox-single" <?php echo $checkSellChecked; ?>> SELL
        </div>
        <br>
        <label for="mercado">Mercado:</label>
        <select id="mercado" name="mercado">
            <option value="eurusd" <?php if ($mercado === 'eurusd') echo 'selected'; ?>>EURUSD</option>
            <option value="gbpusd" <?php if ($mercado === 'gbpusd') echo 'selected'; ?>>GBPUSD</option>
            <option value="usdjpy" <?php if ($mercado === 'usdjpy') echo 'selected'; ?>>USDJPY</option>
            <option value="usdaud" <?php if ($mercado === 'usdaud') echo 'selected'; ?>>USDAUD</option>
        </select>
        <br>
        <label for="estrategy">Estrategia:</label>
        <select id="estrategy" name="estrategy">
            <option value="e1" <?php if ($estrategia === 'e1') echo 'selected'; ?>>20TP - 15SL</option>
            <option value="e2" <?php if ($estrategia === 'e2') echo 'selected'; ?>>30TP - 25SL</option>
            <option value="e3" <?php if ($estrategia === 'e3') echo 'selected'; ?>>15TP - 10SL</option>
        </select>
        <br>
        <label for="numero">Entrada:</label>
        <input type="number" id="numero" name="numero" step="any" value="<?php echo $entrada; ?>" required>
        <br>
        <input type="submit" value="Calcular">

        <script>
            $(document).ready(function() {
                $('.checkbox-single').change(function() {
                    $('.checkbox-single').not(this).prop('checked', false);
                });

                $('form').submit(function(event) {
                    if ($('div.checkbox-group.required :checkbox:checked').length === 0) {
                        event.preventDefault(); // Evitar el envío del formulario
                        alert('Por favor, seleccione una opción (BUY o SELL).');
                    }
                });

                $('#mercado').change(function() {
                    var selectedMarket = $(this).val();
                    var placeholderText = '';

                    if (selectedMarket === 'eurusd') {
                        placeholderText = '0.00110';
                    } else if (selectedMarket === 'gbpusd') {
                        placeholderText = '0.00110';
                    } else if (selectedMarket === 'usdjpy') {
                        placeholderText = '000.110';
                    } else if (selectedMarket === 'usdaud') {
                        placeholderText = 'USDAUD Entrada';
                    }

                    $('#numero').attr('placeholder', placeholderText);
                });
            });
        </script>

    </form>
    
    <?php if ($checkBuyChecked || $checkSellChecked): ?>
        <p>Resultado: <?php echo $resultText ?></p>
    <?php endif; ?>
    <p><?php echo $resultado_tp; ?></p>
    <p><?php echo $resultado_sl; ?></p>
</main>

<?php include 'footer.php'; ?>