function getBotResponse(input) {
	// Simple responses
	if (input == "hello") {
		return "Hello there!";
	} else if (input == "goodbye") {
		return "Talk to you later!";
	} else if (input == "can i have an appointment?") {
		return "Sure!";
	} else {
		return "Try asking something else!";
	}
}
