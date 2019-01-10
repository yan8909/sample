<a href="{{ route('users.followings', $user->id) }}">
    <strong id="following" class="stat">
      {{ count($user->followings) }}
    </strong>
    Following
  </a>
  <a href="{{ route('users.followers', $user->id) }}">
    <strong id="followers" class="stat">
      {{ count($user->followers) }}
    </strong>
    Fans
  </a>
  <a href="{{ route('users.show', $user->id) }}">
    <strong id="statuses" class="stat">
      {{ $user->statuses()->count() }}
    </strong>
    微博
  </a>