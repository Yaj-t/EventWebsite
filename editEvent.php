<div class="modal fade" id="editModal<?php echo $row["event_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit event form -->
                <form action="updateEvent.php" method="POST">
                    <input type="hidden" name="event_id" value="<?php echo $row["event_id"]; ?>">
                    <div class="form-group">
                        <label for="event-name">Event Name:</label>
                        <input type="text" class="form-control" id="event-name" name="event-name" value="<?php echo $row["title"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="event-description">Event Description:</label>
                        <textarea class="form-control" id="event-description" name="event-description" required><?php echo $row["description"]; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Event Date:</label>
                        <input type="date" class="form-control" id="date" name="date" value="<?php echo $row["date"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Event Time:</label>
                        <input type="time" class="form-control" id="time" name="time" value="<?php echo $row["time"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Event Location:</label>
                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row["location"]; ?>" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>