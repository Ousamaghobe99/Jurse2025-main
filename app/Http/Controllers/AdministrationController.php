<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Models\KeynoteSpeakers;
use App\Models\Links;
use App\Models\organizers;
use App\Models\Pages;
use App\Models\SpecialSessions;
use App\Models\Sponsors;
use App\Models\Tweets;
use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        return view('administration.index');
    }

    // Afficher tous les liens
    public function showLinks()
    {
        $links = Links::all();
        return view('admin.links.index', compact('links'));
    }

    // Afficher le formulaire de création d'un nouveau lien
    public function createLink()
    {
        return view('admin.links.create');
    }

    // Enregistrer un nouveau lien
    public function storeLink(Request $request)
    {
        Links::create($request->all());
        return redirect()->route('admin.links.index');
    }

    // Afficher le formulaire d'édition d'un lien
    public function editLink(Links $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    // Mettre à jour un lien
    public function updateLink(Request $request, Links $link)
    {
        $link->update($request->all());
        return redirect()->route('admin.links.index');
    }

    // Supprimer un lien
    public function deleteLink(Links $link)
    {
        $link->delete();
        return redirect()->route('admin.links.index');
    }

    public function showPages()
    {
        $pages = Pages::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function createPage()
    {
        return view('admin.pages.create');
    }

    public function storePage(Request $request)
    {
        Pages::create($request->all());
        return redirect()->route('admin.pages.index');
    }

    public function editPage(Pages $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function updatePage(Request $request, Pages $page)
    {
        $page->update($request->all());
        return redirect()->route('admin.pages.index');
    }

    public function deletePage(Pages $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }

    public function showTweets()
    {
        $tweets = Tweets::all();
        return view('admin.tweets.index', compact('tweets'));
    }

    public function createTweet()
    {
        return view('admin.tweets.create');
    }

    public function storeTweet(Request $request)
    {
        Tweets::create($request->all());
        return redirect()->route('admin.tweets.index');
    }

    public function editTweet(Tweets $tweet)
    {
        return view('admin.tweets.edit', compact('tweet'));
    }

    public function updateTweet(Request $request, Tweets $tweet)
    {
        $tweet->update($request->all());
        return redirect()->route('admin.tweets.index');
    }

    public function deleteTweets(Tweets $tweet)
    {
        $tweet->delete();
        return redirect()->route('admin.tweets.index');
    }

    public function showOrganizers()
    {
        $organizers = Organizers::all();
        return view('admin.organizers.index', compact('organizers'));
    }

    public function storeOrganizer(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'slc' => 'required|string|max:255',
            'order' => 'required|integer',
        ]);

        // Création et sauvegarde de l'organisateur
        Organizers::create($validatedData);

        // Redirection vers la liste des organisateurs avec un message de succès
        return redirect()->route('admin.organizers.index')
            ->with('success', 'Organisateur ajouté avec succès.');
    }


    public function createOrganizer()
    {
        return view('admin.organizers.create');
    }

    public function storeOrganizers(Request $request)
    {
        Organizers::create($request->all());
        return redirect()->route('admin.organizers.index');
    }

    public function editOrganizers(Organizers $organizer)
    {
        return view('admin.organizers.edit', compact('organizer'));
    }

    public function updateOrganizers(Request $request, Organizers $organizer)
    {
        $organizer->update($request->all());
        return redirect()->route('admin.organizers.index');
    }

    public function deleteOrganizers(Organizers $organizer)
    {
        $organizer->delete();
        return redirect()->route('admin.organizers.index');
    }

    public function showSponsors()
    {
        $sponsors = Sponsors::all();
        return view('admin.sponsors.index', compact('sponsors'));
    }

    public function createSponsor()
    {
        return view('admin.sponsors.create');
    }

    public function storeSponsor(Request $request)
    {
        Sponsors::create($request->all());
        return redirect()->route('admin.sponsors.index');
    }

    public function editSponsor(Sponsors $sponsor)
    {
        return view('admin.sponsors.edit', compact('sponsor'));
    }

    public function updateSponsor(Request $request, Sponsors $sponsor)
    {
        $sponsor->update($request->all());
        return redirect()->route('admin.sponsors.index');
    }

    public function deleteSponsor(Sponsors $sponsor)
    {
        $sponsor->delete();
        return redirect()->route('admin.sponsors.index');
    }

    public function showKeynoteSpeakers()
    {
        $keynoteSpeakers = KeynoteSpeakers::all();
        return view('admin.keynotespeakers.index', compact('keynoteSpeakers'));
    }

    public function createKeynoteSpeaker()
    {
        return view('admin.keynotespeakers.create');
    }

    public function storeKeynoteSpeaker(Request $request)
    {
        KeynoteSpeakers::create($request->all());
        return redirect()->route('admin.keynotespeakers.index');
    }

    public function editKeynoteSpeaker(KeynoteSpeakers $keynoteSpeaker)
    {
        return view('admin.keynotespeakers.edit', compact('keynoteSpeaker'));
    }

    public function updateKeynoteSpeaker(Request $request, KeynoteSpeakers $keynoteSpeaker)
    {
        $keynoteSpeaker->update($request->all());
        return redirect()->route('admin.keynotespeakers.index');
    }

    public final function deleteKeynoteSpeaker(KeynoteSpeakers $keynoteSpeaker)
    {
        $keynoteSpeaker->delete();
        return redirect()->route('admin.keynotespeakers.index');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    public function updateUser(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Exemple de validation pour le nom
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Validation de l'email, en excluant l'email actuel de l'utilisateur
            'password' => 'sometimes|nullable|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        } else {
            unset($validatedData['password']); // Ne pas changer le mot de passe s'il n'est pas fourni
        }

        $user->update($validatedData);

        return redirect()->route('admin.user.index');
    }


    public function editUser(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); // Hacher le mot de passe

        User::create($validatedData);

        return redirect()->route('admin.user.index');
    }


    public function createUser()
    {
        return view('admin.user.create');
    }

    public function showUser()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

// Afficher tous les auteurs
    public function indexAuthors()
    {
        $authors = Authors::all();
        return view('admin.authors.index', compact('authors'));
    }

    // Afficher le formulaire de création d'un auteur
    public function createAuthor()
    {
        $specialSessions = SpecialSessions::all();
        return view('admin.authors.create', compact('specialSessions'));

    }

    public function storeAuthor(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'organism' => 'nullable|string|max:255',
            'special_session_id' => 'nullable|exists:special_sessions,id',
        ]);

        $author = new Authors();
        $author->fill($validatedData);
        $author->save();

        return redirect()->route('admin.authors.index');
    }


    // Afficher le formulaire d'édition d'un auteur
    public function editAuthor(Authors $author)
    {
        $specialSessions = SpecialSessions::all();
        return view('admin.authors.edit', compact('author', 'specialSessions'));

    }// Mettre à jour un auteur

    public function updateAuthor(Request $request, Authors $author)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'organism' => 'nullable|string|max:255',
            'special_session_id' => 'nullable|exists:special_sessions,id', // rendu nullable si la sélection d'une session n'est pas obligatoire
        ]);

        $author->update($validatedData);

        // Mettre à jour la relation avec SpecialSession
        // Notez que l'attribut est special_session_id et non specialSessions
        if ($request->has('special_session_id') && !empty($request['special_session_id'])) {
            $author->special_session_id = $request->special_session_id;
            $author->save();
        } else {
            // Si aucune session spéciale n'est sélectionnée, mettez à null le champ special_session_id
            $author->special_session_id = null;
            $author->save();
        }

        return redirect()->route('admin.authors.index');
    }


    // Supprimer un auteur
    public function deleteAuthor(Authors $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index');
    }

    public function indexSpecialSessions()
    {
        $specialSessions = SpecialSessions::all();
        return view('admin.specialsessions.index', compact('specialSessions'));
    }

    // Afficher le formulaire de création d'une session spéciale
    public function createSpecialSession()
    {
        return view('admin.specialsessions.create');
    }

    // Enregistrer une nouvelle session spéciale
    public function storeSpecialSession(Request $request)
    {
        SpecialSessions::create($request->all());
        return redirect()->route('admin.specialsessions.index');
    }

    // Afficher le formulaire d'édition d'une session spéciale
    public function editSpecialSession(SpecialSessions $session)
    {
        return view('admin.specialsessions.edit', compact('session'));
    }

    // Mettre à jour une session spéciale
    public function updateSpecialSession(Request $request, SpecialSessions $specialSession)
    {
        $specialSession->update($request->all());
        return redirect()->route('admin.specialsessions.index');
    }

    // Supprimer une session spéciale
    public function deleteSpecialSession(SpecialSessions $specialSession)
    {
        $specialSession->delete();
        return redirect()->route('admin.specialsessions.index');
    }
}
