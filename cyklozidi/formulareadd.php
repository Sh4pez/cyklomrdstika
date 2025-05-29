<?= $this->extend('layout/sablona'); ?>
<?= $this->section('content') ?>
<?= $this->include("layout/css");?>
<form method="post" action="your_action_page.php">
<style>
form {
        display: flex;
        flex-direction: column;
        max-width: 400px;
        margin: 0 auto;
    }

    label, input, select {
        margin-bottom: 15px;
    }

    input, select {
        padding: 8px;
        font-size: 14px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3; }
    </style>
    <label for="start">Start etapy</label>
    <input type="text" id="start" name="start" value="<?php echo isset($start) ? htmlspecialchars($start) : ''; ?>">

    
    <label for="cil">Cíl etapy</label>
    <input type="text" id="cil" name="cil" value="<?php echo isset($cil) ? htmlspecialchars($cil) : ''; ?>">

    
    <label for="datum">Datum etapy</label>
    <input type="date" id="datum" name="datum" value="<?php echo isset($datum) ? htmlspecialchars($datum) : ''; ?>">

    
    <label for="cisloEtapy">Číslo etapy</label>
    <div class="mb-3">
                            <label for="moznosti" class="form-label">Možnosti</label>
                            <select class="form-select" id="moznosti" name="uci_tour" required>
                                <option value="" disabled selected>Najdi</option>
                                <?php foreach ($moznosti as $moz): ?>
                                    <option value="<?= $moz['id'] ?>"><?= esc($moz['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
    </select> 
    <label for="delkaEtapy">Délka etapy (km):</label>
    <input type="number" id="delkaEtapy" name="delkaEtapy" step="0.1" value="<?php echo isset($delkaEtapy) ? htmlspecialchars($delkaEtapy) : ''; ?>">
    <input type="submit" value="Uložit">
    
</form>
<?= $this->endSection(); ?>
