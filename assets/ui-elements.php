<div class="settings-wrapper" data-global='<?php echo $config_json; ?>'>
	<div class="settings-container noselect">
		<div class="settings-topbar-wrapper">
			<span class="settings-title">Setări</span>
			<button type="button" class="close-button">Închide</button>
			<button type="button" class="apply-button">Aplicare</button>
		</div>
		<div class="settings-sidebar-wrapper">
			<div class="settings-sidebar-container">
				<button type="button" class="settings-sidebar-button settings-notes-button">Note</button>
				<button type="button" class="settings-sidebar-button settings-appearance-button">Aspect</button>
				<button type="button" class="settings-sidebar-button settings-behavior-button">Comportament</button>
				<button type="button" class="settings-sidebar-button settings-actions-button">Acțiuni</button>
				<button type="button" class="settings-sidebar-button settings-account-button">Cont</button>
			</div>
		</div>
		<div class="settings-pane settings-notes-pane"></div>
		<div class="settings-pane settings-appearance-pane">
			<div class="settings-section">
				<span class="settings-heading-text">Temă</span>
				<button class="settings-action-button choice blue settings-theme-light-button" data-category="appearance" data-setting="theme" data-choice="light">Luminos</button>
				<button class="settings-action-button choice blue settings-theme-dark-button" data-category="appearance" data-setting="theme" data-choice="dark">Întunecat</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Pictograme Note</span>
				<button class="settings-action-button choice blue settings-note-icons-mono-button" data-category="appearance" data-setting="note-icons" data-choice="monochrome">Monocrom</button>
				<button class="settings-action-button choice blue settings-note-icons-colored-button" data-category="appearance" data-setting="note-icons" data-choice="colored">Colorat</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Format Butoane</span>
				<button class="settings-action-button choice blue settings-format-circle-button" data-category="appearance" data-setting="formatting-buttons" data-choice="circle">Cerc</button>
				<button class="settings-action-button choice blue settings-format-square-button" data-category="appearance" data-setting="formatting-buttons" data-choice="square">Pătrat</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Casetă Căutare</span>
				<button class="settings-action-button choice blue settings-search-visible-button" data-category="appearance" data-setting="search-box" data-choice="visible">Vizibilă</button>
				<button class="settings-action-button choice blue settings-search-hidden-button" data-category="appearance" data-setting="search-box" data-choice="hidden">Ascunsă</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Separatoare</span>
				<button class="settings-action-button choice blue settings-separators-visible-button" data-category="appearance" data-setting="separators" data-choice="visible">Vizibile</button>
				<button class="settings-action-button choice blue settings-separators-hidden-button" data-category="appearance" data-setting="separators" data-choice="hidden">Ascunse</button>
			</div>
		</div>
		<div class="settings-pane settings-behavior-pane">
			<div class="settings-section">
				<span class="settings-heading-text">Redeschidere Note</span>
				<button class="settings-action-button choice blue settings-reopen-notes-auto-button" data-category="behavior" data-setting="reopen-notes" data-choice="automatically">Automat</button>
				<button class="settings-action-button choice blue settings-reopen-notes-manual-button" data-category="behavior" data-setting="reopen-notes" data-choice="manually">Manual</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Sfaturi Instrumente (desktop) - Necesită Reîmprospătare</span>
				<button class="settings-action-button choice blue settings-tooltips-enabled-button" data-category="behavior" data-setting="tooltips" data-choice="enabled">Activat</button>
				<button class="settings-action-button choice blue settings-tooltips-disabled-button" data-category="behavior" data-setting="tooltips" data-choice="disabled">Dezactivat</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Pagină de setări implicite</span>
				<button class="settings-action-button choice blue settings-default-notes-button" data-category="behavior" data-setting="default-settings-page" data-choice="notes">Note</button>
				<button class="settings-action-button choice blue settings-default-appearance-button" data-category="behavior" data-setting="default-settings-page" data-choice="appearance">Aspect</button>
				<button class="settings-action-button choice blue settings-default-behavior-button" data-category="behavior" data-setting="default-settings-page" data-choice="behavior">Comportament</button>
				<button class="settings-action-button choice blue settings-default-actions-button" data-category="behavior" data-setting="default-settings-page" data-choice="actions">Acțiuni</button>
				<button class="settings-action-button choice blue settings-default-account-button" data-category="behavior" data-setting="default-settings-page" data-choice="account">Cont</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Notificări</span>
				<button class="settings-action-button choice blue settings-notifications-enabled-button" data-category="behavior" data-setting="notifications" data-choice="enabled">Activat</button>
				<button class="settings-action-button choice blue settings-notifications-disabled-button" data-category="behavior" data-setting="notifications" data-choice="disabled">Dezactivat</button>
			</div>
		</div>
		<div class="settings-pane settings-actions-pane">
			<div class="settings-section settings-delete-section">
				<span class="settings-heading-text">Ștergere Completă</span>
				<input class="settings-input-field settings-input-password" type="password" placeholder="Parolă Cont...">
				<button class="settings-action-button red settings-delete-all-notes-button">Ștergere</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Resetare Setări - Necesită Reîmprospătare</span>
				<button class="settings-action-button red settings-reset-preferences-button">Reset</button>
			</div>
		</div>
		<div class="settings-pane settings-account-pane">
			<div class="settings-section settings-username-section">
				<span class="settings-heading-text">Utilizator - Reîmprospătare &amp; Autentificare Necesară</span>
				<input class="settings-input-field settings-input-username" type="text" placeholder="Nume Utilizator Nou...">
				<input class="settings-input-field settings-input-password" type="password" placeholder="Parolă...">
				<button class="settings-action-button blue settings-change-username-button">Schimbare Utilizator</button>
			</div>
			<div class="settings-section settings-password-section">
				<span class="settings-heading-text">Parolă - Reîmprostătare &amp; Autentificare Necesară</span>
				<input class="settings-input-field settings-input-current-password" type="password" placeholder="Parolă Curentă...">
				<input class="settings-input-field settings-input-new-password" type="password" placeholder="Parolă Nouă...">
				<input class="settings-input-field settings-input-repeat-password" type="password" placeholder="Parolă Nouă x 2...">
				<button class="settings-action-button blue settings-change-password-button">Schimabre Parolă</button>
			</div>
		</div>
	</div>
</div>
<div class="note-title-edit-wrapper">
	<div class="note-title-edit-container">
		<span class="note-title-edit-text noselect"></span>
		<div class="note-title-edit-title-wrapper">
			<input class="note-title-edit-input" type="text" placeholder="Titlu..." maxlength="32">
			<div class="note-title-edit-counter-wrapper noselect">
				<span class="note-title-edit-counter">32</span>
			</div>
		</div>
		<div class="note-title-edit-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
<div class="user-confirmation-wrapper">
	<div class="user-confirmation-container">
		<span class="user-confirmation-title noselect"></span>
		<span class="user-confirmation-description noselect"></span>
		<div class="user-confirmation-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
<div class="raw-data-wrapper">
	<div class="raw-data-container">
		<span class="raw-data-title noselect">DATE Brute JSON</span>
		<div class="raw-data-content-wrapper">
			<span class="raw-data-content select"></span>
		</div>
		<div class="raw-data-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
		</div>
	</div>
</div>
<div class="notification-area"></div>
<div class="note-lock-wrapper">
	<div class="note-lock-container">
		<span class="note-lock-title noselect"></span>
		<span class="note-lock-description noselect"></span>
		<div class="note-lock-input-wrapper">
			<input class="note-lock-input current-password" type="password">
			<input class="note-lock-input new-password" type="password" placeholder="Parolă Nouă...">
			<input class="note-lock-input repeat-password" type="password" placeholder="Parolă Nouă x 2...">
		</div>
		<div class="note-lock-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
<div class="help-wrapper">
	<div class="help-container">
		<span class="help-title noselect">Ajutor</span>
		<div class="help-content-wrapper noselect">
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Creare Note</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Pentru a crea o notă, faceți clic pe butonul „Compune” care arată ca un blocnotes cu un stilou. Apoi, puteți introduce un titlu pentru nota dvs., deși un titlu nu este strict necesar. După ce faceți clic pe butonul de confirmare, va fi creată o notă. Apoi puteți deschide nota respectivă și puteți începe să scrieți.</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Ștergere Note</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Pentru a șterge o notă, pur și simplu deschideți-o și faceți clic pe pictograma „...” din dreapta sus, urmată de un clic pe butonul „Șterge”. Vi se va cere să confirmați ștergerea. Odată ce faceți clic pe butonul de confirmare, nota este ștearsă ireversibil, așa că aveți grijă. Dacă doriți să ștergeți o notă blocată pentru care ați uitat parola, faceți clic pe butonul „Setări” care arată ca o roată dințată/cog din partea din stânga jos a paginii principale și accesați secțiunea „Note” a paginii de setări, selectați nota pe care doriți să o ștergeți și faceți clic pe butonul „Ștergere”..</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Blocare Note</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Pentru a bloca o notă, deschideți-o, faceți clic pe pictograma „...” din dreapta sus și faceți clic pe butonul „Blocare”. Aceasta va deschide un nou meniu în stânga celui deschis curent. Veți avea opțiunea de a bloca, debloca sau schimba parola de blocare pentru notă, în funcție de dacă este sau nu deja blocată. Setarea unei parole criptează conținutul notei folosind AES-256. Dacă pierdeți sau uitați parola, nu există absolut nicio modalitate de a recupera conținutul notei, așa că setați o parolă pe care o veți aminti sau notați-o. Deschiderea fișierelor de note necesită autentificarea utilizatorului, așa că, chiar dacă setați o parolă slabă, atâta timp cât parola contului dvs. este puternică, notele dvs. vor fi în siguranță. Acestea fiind spuse, rețineți că, dacă serverul este compromis, o parolă slabă va fi ușor de utilizat cu forța brută, deoarece hackerul va avea fișierul de notă real.</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Partajare Note</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Pentru a partaja o notă, deschideți-o, faceți clic pe pictograma „...” din dreapta sus și faceți clic pe butonul „Partajare”. Aceasta va deschide un nou meniu în stânga celui deschis curent. Veți avea opțiunea de a face nota publică, privată sau de a copia linkul accesibil public către notă, în funcție de dacă nota a fost partajată sau nu. Link-ul accesibil public este sigur de distribuit și nu acordă niciun privilegiu de editare, ceea ce înseamnă că oricine are linkul poate citi/viziona nota, dar nu o poate modifica în niciun fel. Dacă nota este blocată, oricui deschide linkul i se va cere o parolă pentru a vedea conținutul notei. Aceasta ar fi aceeași parolă pe care ați folosit-o pentru a bloca nota, <b>nu</b> parola contului dvs. Dacă faceți din nou nota privată, linkul nu se va folosi, dar linkul nu se va schimba dacă decideți să faceți nota accesibilă public în viitor, așa că nu este nevoie să oferiți un link nou de fiecare dată când vă răzgândiți, deoarece linkul nu este generat și este unic pentru nota cu care este asociat. Legătura este alcătuită din marcajul temporal UNIX la momentul creării notei, împreună cu un hash MD5 al unei versiuni amestecate a aceleiași mărci temporale. Scriptul de creare a notelor face acest lucru pentru a se asigura că două note nu pot avea același identificator unic.</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Securitate</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Acesta este probabil cel mai sigur site pe care l-am creat, așa că vă puteți aștepta ca notele dvs. să fie foarte sigure. Parola contului dvs. este stocată folosind BCrypt, care este un algoritm de hashing unidirecțional care nu poate fi descifrat în viitorul apropiat. Notele sunt stocate pe un server la care nimeni altcineva în afară de mine nu are acces, iar notele blocate sunt stocate folosind criptarea militară AES-256, așa că, chiar dacă serverul ar fi piratat, notele dvs. ar fi în siguranță atâta timp cât ați alege o parolă sigură. Singurul mod în care oricine poate obține acces la conținutul notelor este prin forța brută, dar acest lucru este la fel de imposibil pe cât îl faci pentru ei prin utilizarea unei parole puternice. X:/Notes are, de asemenea, un API privat care este securizat și plin de verificări de validare, așa că, chiar dacă cineva a obținut acces la contul dvs., tot nu vă poate vizualiza sau modifica notele blocate, dar le poate șterge, deși acest lucru este necesar pentru a vă asigura că nu rămâneți blocat cu o notă doar pentru că ați uitat parola. Când deschideți o notă blocată, parola notei este stocată local pe partea client pentru a fi utilizată în unele dintre funcții. Parola nu este niciodată dezvăluită, dar este recomandat să închideți notele blocate înainte de a părăsi computerul sau, mai bine, să vă deconectați complet. Când o notă este închisă, acea parolă este anulată, ceea ce înseamnă că nu mai poate fi recuperată. <b>Important:</b> atunci când utilizați funcția „Ține-mă minte” din pagina de conectare, numele de utilizator și parola sunt stocate într-un cookie din browser. Acest lucru nu este foarte sigur dacă altcineva are sau are acces la browserul dvs. și, în consecință, cookie-urile acestuia. Parola nu este stocată în text simplu, dar s-ar putea la fel de bine să țină cont că este codificată în base64. Practic, dacă ești singura persoană care îți folosește computerul și nu ai nicio vulnerabilitate de securitate, ești bine. Acest lucru nu compromite în niciun fel securitatea conținutului notițelor dvs.</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Conturi</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">Accesul la acest site nu este posibil fără un cont. A avea un cont, „<?php echo $valid_username; ?>”, este singura modalitate de a crea, șterge, modifica sau interacționa în alt mod cu site-ul web. Fără cont, singura interacțiune posibilă este vizualizarea unei note care este partajată. Prin intermediul contului dvs., puteți modifica și seta preferințele dvs., cum ar fi tema preferată, schema de culori și anumite moduri în care se comportă site-ul.</span>
			</div>
			<div class="help-content-title-wrapper">
				<span class="help-content-title">Cum Funcționează?</span>
			</div>
			<div class="help-content-text-wrapper">
				<span class="help-content-text">X:/Note folosește un API privat personalizat care se ocupă de aproape tot. Pe lângă API, există și un script de procesare responsabil pentru crearea, ștergerea sau modificarea în alt mod a notelor. API-ul deschide note și le ține evidența. Aceste două scripturi sunt numite folosind solicitări AJAX, permițând acestui site să fie practic o aplicație web în care nu părăsiți niciodată pagina principală. Persoanele care vizionează notele partajate utilizează, de asemenea, API-ul, dar se limitează în întregime la vizualizarea notelor partajate, ceea ce înseamnă că nici măcar nu pot încerca să vadă notele care nu sunt partajate..</span>
			</div>
		</div>
		<div class="help-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
		</div>
	</div>
</div>
