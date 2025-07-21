<div style="font-family: Arial, sans-serif; color: #333;">
    <h2 style="color: #0066cc;">Nouveau message depuis le formulaire de contact</h2>
    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Téléphone :</strong> {{ $phone ?? 'Non précisé' }}</p>
    <p><strong>Service demandé :</strong> {{ $service }}</p>
    <hr>
    <p style="margin-top:10px;"><strong>Message :</strong></p>
    <div style="background:#f9f9f9; padding:10px; border:1px solid #ddd;">
        {!! nl2br(e($user_message)) !!}
    </div>
    <p style="font-size:12px; color:#999; margin-top:20px;">
        Ce message a été généré automatiquement depuis votre site.
    </p>
</div>
