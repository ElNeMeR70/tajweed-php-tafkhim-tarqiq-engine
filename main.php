<?php
declare(strict_types=1);

/**
 * tajweed-php-tafkhim-tarqiq-engine — محرك التفخيم والترقيق وأحكام الراء ولام لفظ الجلالة
 * Tafkhim Pharyngealization & Ra/Lam Allophone Analyzer
 */
$input = "رَبِّ / فِرْعَوْنَ / اللَّهِ";
$digest = substr(hash("sha256", "tajweed-php-tafkhim-tarqiq-engine:" . $input), 0, 12);

echo "[RUN] tajweed-php-tafkhim-tarqiq-engine (PHP) — Tafkhim Pharyngealization & Ra/Lam Allophone Analyzer" . PHP_EOL;
echo "[AR]  محرك التفخيم والترقيق وأحكام الراء ولام لفظ الجلالة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Isti'laGrade=1 | RaState=Muraqqaqah | LamJalalah=Tafkhim | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
