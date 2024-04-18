@extends('layouts.app')
@section('title', 'A.S.B.L. VOY - Contact')

@section('content')
    <h1 class="text-center">Nous contacter :</h1>
    <ul>
        <li><i class="bi bi-facebook" aria-label="Icone Facebook"></i><a target="_blank" rel="noopener noreferrer"
                href="https://www.facebook.com/profile.php?id=100039993684062">Facebook Cécifoot Standard de Liège</a></li>
        <li><i class="bi bi-instagram"></i><a rel="noopener noreferrer" href="https://www.instagram.com/standard_cecifoot/"
                target="_blank">Instagram standard_cecifoot : </a></li>
        <li><i class="bi bi-at"><a href="mailto:standard.cecifoot@gmail.com">Email : standard.cecifoot@gmail.com</a></i>
        </li>
        <li><i class="bi bi-whatsapp"><a href="Tel:+32494082938">Numéro de téléphone : 0494/08.29.38</a></i></li>
        <li>Numéro de TVA : BE0753.705.341</li>
        <li>Numéro de compte : BE94 0689 3895 8714</li>
        <li>Adresse :<br />
            Rue du Brouck, 69,<br />
            4600 Visé</li>
    </ul>
    <h2>Ou envoyez nous un message :</h2>

    <form name="Envoyez un message" id="formcontact" method="post" action="">
        <fieldset>
            <legend>Coordonnées</legend>
            <p>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" autocomplete="family-name" id="nom"
                    placeholder="Champ obligatoire" required>
            </p>
            <p>
                <label for="prenom">Prenom :</label>
                <input type="text" name="prenom" id="prenom" placeholder="Champ obligatoire" required>
            </p>
            <p>
                <label for="email">E-Mail : (exemple : jean.dupond@mail.com)</label>
                <input type="email" name="email" id="email" placeholder="Champ obligatoire" required>
            </p>
            <p>
                <label for="GSM">GSM : (Example - +32.123456789)</label>
                <input type="tel" name="GSM" id="GSM">
            </p>
            <p>
        </fieldset>
        <p><label for="message">Écrivez votre message :</label>
            <textarea id="message" name="message" minlength="10" maxlength="2000" placeholder="Champ obligatoire" required></textarea>
        </p>
        <input type="submit" value="Envoyer" disabled>
        <input type="reset" value="Effacer">
    </form>
@endsection
@section('footer')
    @parent
    <p>Vous pouvez nous contacter via le formulaire ci-dessus ou par les réseaux sociaux.</p>
@endsection
