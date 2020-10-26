<?php 
    $contact_card_field_group = get_field('contact_card', 'option');
?>

<section id="contact-card">
    <aside style="background-image: url('<?= $contact_card_field_group['profile_image'] ?>')"></aside>
    <div id="card">
        <h3><?= $contact_card_field_group['name'] ?></h3>
        <p><?= $contact_card_field_group['profession'] ?></p>
        <div>
            <div style="background-image: url('<?= $contact_card_field_group['email_icon'] ?>')"></div>
            <a href="mailto:<?= $contact_card_field_group['email'] ?>">SEND EMAIL</a>
        </div>
        <a href="tel:<?= $contact_card_field_group['phone'] ?>"><?= $contact_card_field_group['phone'] ?></a>
    </div>
</section>