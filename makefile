.PHONY: run up serve

# Check if the sail script exists and use it, otherwise fallback to vendor/bin/sail
SAIL_CMD = $(shell [ -f sail ] && echo "bash sail" || echo "bash vendor/bin/sail")

# Start the Docker containers
up:
	$(SAIL_CMD) up -d

# Serve the application
serve:
	$(SAIL_CMD) artisan serve

# Run both up and serve
run: up serve
