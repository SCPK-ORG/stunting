 <div class="message-wrapper mt-2">
     <ul class="messages">
         @foreach($messages as $message)
            <li class="message clearfix">
                {{--if message from id is equal to auth id then it is sent by logged in user--}}
                <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                    <p>{{ $message->message }}</p>
                    <p class="date">{{ date('d M y, h:i a', strtotime($message->created_at)) }}</p>
                </div>
            </li>
         @endforeach
     </ul>
 </div>

 <div class="input-text send-message">
        <input type="text" name="message" id="" class="submit" placeholder="Type here...">
 </div>