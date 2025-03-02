<?php

/**
 * News Manager Polish language file by Blazej Strazak
 update by Reptile [2025/03/02] 
 */


$i18n = array(

# general
"PLUGIN_NAME"         =>  "News Manager",

# error messages
"ERROR_ENV"           =>  "Wystąpił błąd z dostępem do posta i/lub pliku konfiguracyjnego. <em>CHMOD 777</em> katalog /data, /backups oraz jego podkatalogi i spróbuj ponownie.",
"ERROR_SAVE"          =>  "<b>Error:</b> Nie można zapisać zmiany. <em>CHMOD 777</em> katalog /data, /backups oraz jego podkatalogi i spróbuj ponownie.",
"ERROR_DELETE"        =>  "<b>Error:</b> Nie można skasować posta. <em>CHMOD 777</em> katalog /data, /backups oraz jego podkatalogi i spróbuj ponownie.",
"ERROR_RESTORE"       =>  "<b>Error:</b> Nie można przywrócić posta. <em>CHMOD 777</em> katalog /data, /backups oraz jego podkatalogi i spróbuj ponownie.",

# success messages
"SUCCESS_SAVE"        =>  "Twoje zmiany zostały zapisane.",
"SUCCESS_DELETE"      =>  "Post został skasowany.",
"SUCCESS_RESTORE"     =>  "Post został przywrócony.",

# other messages
"UPDATE_HTACCESS"     =>  "<b>Uwaga:</b> Prawdopodobnie musisz zaktualizować plik <a href=\"%s\">.htaccess</a>!",

# admin button (top-right)
"NEWS_TAB"            =>  "News",
"SETTINGS"            =>  "Ustawienia",
"NEW_POST"            =>  "Utwórz nowego posta",

# admin panel
"POST_TITLE"          =>  "Tytuł posta",
"DATE"                =>  "Data",
"EDIT_POST"           =>  "Edytuj posta",
"VIEW_POST"           =>  "Zobacz posta",
"DELETE_POST"         =>  "Skasuj posta",
"POSTS"               =>  "post(y)",

# edit settings
"NM_SETTINGS"         =>  "Ustawienia News Manager'a",
"DOCUMENTATION"       =>  "Więcej informacji na temat ustawień znajdziesz na stronie z <a href=\"%s\" target=\"_blank\">dokumentacją</a>.",
"PAGE_URL"            =>  "Strona do wyświetlania postów",
"NO_PAGE_SELECTED"    =>  "Nie wybrano strony",
"LANGUAGE"            =>  "Wyświetlany język dla strony (News Page)",
"SHOW_POSTS_AS"       =>  "Posty na stronie z aktualnościami są wyświetlane jako",
"FULL_TEXT"           =>  "Pełna treść",
"EXCERPT"             =>  "Zajawka",
"PRETTY_URLS"         =>  "Używaj przyjaznych zdresów do postów, archiwów, itp.",
"PRETTY_URLS_NOTE"    =>  "Jeśli używanie przyjaznych adresów jest aktywne, konieczne może być zaktualizowanie pliku .htaccess po zapisaniu tych ustawień.",
"EXCERPT_LENGTH"      =>  "Długość zajawki (w znakach)",
"POSTS_PER_PAGE"      =>  "Ilość postów na stronie z aktualnościami",
"RECENT_POSTS"        =>  "Ilość ostatnich postów (w sidebarze)",
"ENABLE_ARCHIVES"     =>  "Włączone archiwum",
"BY_MONTH"            =>  "Miesięcznie",
"BY_YEAR"             =>  "Rocznie",
"READ_MORE_LINK"      =>  "Dodaj \"czytaj więcej\" do zajawek",
"ALWAYS"              =>  "Zawsze",
"NOT_SINGLE"          =>  "Tak, tylko nie w pojedynczym postcie",
"GO_BACK_LINK"        =>  "Ustawienie linku \"Wróć do poprzedniej strony\" ",
"TITLE_LINK"          =>  "Tytuł postu jest przekierowaniem do postu",
"BROWSER_BACK"        =>  "Poprzednio odwiedzona strona",
"MAIN_NEWS_PAGE"      =>  "Główna strona postów",
"ENABLE_IMAGES"       =>  "Włącz obraz dla posta",
"IMAGE_LINKS"         =>  "Obraz przekierowuje do posta",
"IMAGE_WIDTH"         =>  "Szerokość obrazu (pixels)",
"IMAGE_HEIGHT"        =>  "Wysokość obrazu (pixels)",
"FULL"                =>  "pełne",
"IMAGE_CROP"          =>  "Przytnij obraz, aby dostosować szerokość/wysokość",
"IMAGE_ALT"           =>  "Wstaw tytuł posta do atrybutu <em>alt</em> obrazu",
"CUSTOM_SETTINGS"     =>  "Ustawienia własne",

# edit post
"POST_OPTIONS"        =>  "Opcje posta",
"POST_SLUG"           =>  "Slug/URL",
"POST_TAGS"           =>  "Tagi (oddzielone przecinkami)",
"POST_DATE"           =>  "Data publikacji (<i>yyyy-mm-dd</i>)",
"POST_TIME"           =>  "Godzina publikacji (<i>hh:mm</i>)",
"POST_PRIVATE"        =>  "Post zaznaczony jako prywatny",
"POST_IMAGE"          =>  "Obraz",
"LAST_SAVED"          =>  "Ostatnio zapisane",

# validation
"FIELD_IS_REQUIRED"   => "To pole jest wymagane",
"ENTER_VALID_DATE"    => "Podaj poprawną datę / Zostaw puste dla bieżącej daty",
"ENTER_VALID_TIME"    => "Podaj poprawny czas / Zostaw puste dla bieżącego czasu",
"ENTER_VALUE_MIN"     => "Proszę o podanie wartości większej bądź równej %d",

# date picker - first day of week (0=Sunday, 1=Monday, ... 6=Saturday)
"DAY_OF_WEEK_START"   => "1",

# htaccess
"HTACCESS_HELP"       =>  "Aby włączyć używanie przyjaznych adresów dla postów, archiwum itp. zmień zawartość pliku <code>.htaccess</code> zna poniższe linie.",
"GO_BACK_WHEN_DONE"   =>  "Gdy skończysz kliknij przycisk poniżej aby wrócić do głównego panelu.",

# save/cancel/delete
"SAVE_SETTINGS"       =>  "Zapisz ustawienia",
"SAVE_POST"           =>  "Zapisz posta",
"FINISHED"            =>  "Gotowe",
"CANCEL"              =>  "Anuluj",
"DELETE"              =>  "Skasuj",
"OR"                  =>  "lub",

# front-end/site
"FOUND"               =>  "Następujące posty zostały odnalezione:",
"NOT_FOUND"           =>  "Niestety, wyszukiwanie nie zwróciło wyników.",
"NOT_EXIST"           =>  "Szukany post nie istnieje.",
"NO_POSTS"            =>  "Nie opublikowano jeszcze żadnych postów.",
"PUBLISHED"           =>  "Opublikowano",
"TAGS"                =>  "Tagi",
"OLDER_POSTS"         =>  "&larr; Starsze posty",
"NEWER_POSTS"         =>  "Nowsze posty &rarr;",
"SEARCH"              =>  "Szukaj",
"GO_BACK"             =>  "&lt;&lt; Wróć do poprzedniej strony",
"ELLIPSIS"            =>  " [...] ",
"READ_MORE"           =>  "Czytaj więcej",
"AUTHOR"              =>  "Autor:",
"PREV_TEXT"           =>  "&lt;",
"PREV_TITLE"          =>  "Poprzednia strona",
"NEXT_TEXT"           =>  "&gt;",
"NEXT_TITLE"          =>  "Następna strona",

# language localization
"LOCALE"              =>  "pl_PL.utf8,pl.utf8,pl_PL.UTF-8,pl.UTF-8,pl_PL,plk,pl",

# date settings - list of available parameters: http://php.net/strftime
"DATE_FORMAT"         =>  "%e %b %Y",
"MONTHLY_FORMAT"      =>  "%B %Y",
"YEARLY_FORMAT"       =>  "%Y"

);
