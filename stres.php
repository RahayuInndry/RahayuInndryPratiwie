<?php
					include 'koneksi.php';
					$NRP = $_GET['NRP'];
					$query = mysql_query("SELECT * FROM data");
					$row = mysql_fetch_array($query);
					?>
					
					<table width="70%">
					<tr>
						<td width='120' name="bulan"> Bulan </td><td>: <?= $row['bulan'];?></td><td></td>
					<tr>
						<td name="NRP">NRP    </td><td>: <?= $row['NRP']; ?></td></tr>
					<tr>
						<td name="Pangkat">Pangkat    </td><td>: <?= $row['Pangkat']; ?></td></tr>
					<tr>
						<td name="Angkatan">Angkatan   </td><td>: <?= $row['Angkatan']; ?></td></tr>
					<tr>
						<td name="Gaji_Pokok">Gaji_Pokok </td><td>: <?= $row['Gaji_Pokok']; ?></td></tr>
					<tr>
						<td name="ULP">ULP     </td><td>: <?= $row['ULP']; ?></td></tr>
					<tr>
						<td name="Uang_Beras">Uang Beras </td><td>: <?= $row['Uang_Beras']; ?></td></tr>
					<tr>
						<td name="Tunjangan_Anak">Tunjangan Anak     </td><td>: <?= $row['Tunjangan_Anak']; ?></td></tr>
					<tr>
						<td name="Tunjangan_Istri">Tunjangan_Istri </td><td>: <?= $row['Tunjangan_Istri']; ?></td></tr>
					<tr>
						<td colspan='2'>&nbsp;</td></tr>
					</table>