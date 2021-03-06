<?php
/*
 * wpkgExpress : A web-based frontend to wpkg
 * Copyright 2009 Brian White
 *
 * This file is part of wpkgExpress.
 *
 * wpkgExpress is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * wpkgExpress is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with wpkgExpress.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>
<h2>Modifying additional associated Profiles for Host '<?php echo $html->link($hostName, array('action'=>'view', $hostID)); ?>'</h2><hr class="hbar" />
<?php echo $form->create('Host', array("url" => "/hosts/add/profile/$hostID")); ?>
<div class="inputwrap"><?php echo $form->input('Host.Profile', array('label' => false, 'multiple' => 'checkbox', 'div' => 'hostsselect', 'selected' => $selected)); ?></div>
<?php echo $form->end('Submit'); ?>
