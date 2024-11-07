{{-- Qui va inserito il contenuto di like btn, le variabili che vengono definite all'interno del suo componente possono essere richiamate qui --}}
{{-- Collego liked variabile a liked variabile wire --}}
<div x-data="{ liked: @entangle('liked')}">
    {{-- Al click, in front !Liked nel back, richiamo toggleLike --}}
    <button @click="liked = !liked; $wire.toggleLike()">
        <span x-text="liked ? 'Unlike' : 'Like'"></span>
    </button>
    {{-- wire:poll.Ns aggiornamento del campo dopo N secondi, non aggiorna se non ci sono cambiamenti --}}
    <span wire:poll.3s> {{ $post->likes_count }} Likes </span>
</div>
